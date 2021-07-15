@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3">
            <a href="{{ url('home') }}"><i class="fa fa-arrow-left"></i> Kembali </a>
        </div>
        <div class="col-md-12">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $barang -> nama_barang }}</li>
            </ol>
        </nav>
        </div>
        <div class="col-md-12 ">
            <div class="cards">
                <div class="card-header">
                    <h2>
                        {{ $barang -> nama_barang }}
                    </h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ url('uploads') }}/{{$barang->gambar}}" class="rounded mx-auto d-block" width="100%" alt="">
                        </div>
                        <div class="col-md-6 mt-5">
                            <table>
                                <tbody class="table">
                                    <tr>
                                        <td>Harga</td>
                                        <td> : </td>
                                        <td>Rp . {{ number_format( $barang->harga ) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Stok</td>
                                        <td> : </td>
                                        <td>{{ $barang->stok }}</td>
                                    </tr>
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td> : </td>
                                        <td>{{ $barang->deskripsi }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Pesan</td>
                                        <td> : </td>
                                        <td>
                                            <form action="{{ url('pesan')}}/{{ $barang->id }}" method="post">
                                            @csrf
                                                <input class="form-control" type="text" 
                                                name="jumlah_pesan" required>
                                                <button class="btn btn-primary mt-2" type="submit">
                                                    <i class="fa fa-shopping-cart"></i> 
                                                     Order
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
