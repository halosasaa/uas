@extends('layouts/layouts')

@section('konten')

<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Buku</span></h2>
    <div class="row px-xl-5">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="w-[20%] py-6">Image</th>
                    <th class="uppercase w-[40%]">Name</th>
                    <th class="uppercase w-[20%]">Quantity</th>
                    <th class="uppercase w-[10%]">Remove</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carts as $cart)
                    <tr>
                        <td class="text-left py-6">
                        <img src="{{ asset('images/'.$cart->attributes->image) }}" class="w-full h-40" width="200" height="200">
                        </td>
                        <td class="text-center">{{ $cart->name }}</td>
                        <td class="text-center"> Jumlah Barang = {{ $cart->quantity }}
                            <form method="POST" action="{{ route('update-cart') }}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $cart->id }}">
                                <input type="number" id="quantity" name="quantity" min="1"
                                    value="1" class="rounded w-3/5 my-1">
                                <button class="bg-cyan-900 w-3/5 py-2 text-dark rounded">Tambah Barang</button>
                            </form>

                        </td>
                        <td  class="text-center">
                            <a class="bg-cyan-900 w-2/5 py-3 px-4 text-dark rounded-full" href="{{ route('remove-item', $cart->id) }}">HAPUS</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>

            <tfoot>
                <tr class="">
                    <td class="">
                        <a class="bg-cyan-900  py-3 px-2 text-dark rounded" style="{{ Cart::isEmpty() ? 'pointer-events:none;' : '' }}" href="{{ route('clear-item') }}">Clear Carts</a>
                    </td>
                </tr>
            </tfoot>
    </div>
</div>

@endsection