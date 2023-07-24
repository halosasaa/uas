@extends('layouts/layouts')

@section('konten')
<div class="container-fluid pt-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span
        class="bg-secondary pr-3">Jenis Menu</span></h2>   
    <div class="row px-xl-5 pb-3">
        @foreach ($res_jenis_menu as $item)
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="">
                <div class="cat-item d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 200px; height: 200px;">
                        <img class="img-fluid" src="images/{{$item->nama_jenis}}.jpg" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>{{$item->nama_jenis}}</h6>
                        <small class="text-body">10 menu</small>                        
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection