@extends('layouts/layouts')

@section('konten')
<div class="container-fluid pt-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span
        class="bg-secondary pr-3">Jenis Menu</span></h2>   
    <div class="row px-xl-5 pb-3">
        @foreach ($jenis_menu as $item)
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="">
                <div class="cat-item d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 200px; height: 200px;">
                        <img class="img-fluid" src="images/{{$item->nama_jenis}}.jpg" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>{{$item->nama_jenis}}</h6>
                        <small class="text-body">10 Menu</small>                        
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Menu</span></h2>
    <div class="row px-xl-5">
        @foreach ($menu as $item)
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="images/{{$item->nama_menu}}.jpg" style="width: 100px; height: 350px;" alt="">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-square" href=""><i
                                    class="fa fa-shopping-cart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i
                                    class="far fa-heart"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i
                                    class="fa fa-sync-alt"></i></a>
                            <a class="btn btn-outline-dark btn-square" href=""><i
                                    class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">{{$item->nama_menu}}</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>Rp.{{$item->harga}}</h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <form method="POST" action="{{ route('add_cart') }}" enctype="multipart/form-data">
                                @csrf
                                <input name="id" value="{{ $item->id }}" hidden>
                                <input name="name" value="{{ $item->nama_menu }}" hidden>
                                <input name="price" value="{{ $item->harga }}" hidden>
                                <input name="image" value="{{ $item->gambar }}" hidden> 
                                <button class="btn btn-primary">Add To Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
