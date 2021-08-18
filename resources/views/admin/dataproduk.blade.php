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
                <li class="breadcrumb-item active" aria-current="page">Data Produk</li>
            </ol>
        </nav>
        </div>
        <div class="col-md-12 mb-3">
            <div class="row justify-content-end">
                    <div class="form-outline">
                      <input id="search-input" type="search" id="form1" class="form-control" placeholder="Search" />
                    </div>
                    <button id="search-button" type="button" class="btn btn-primary">
                      <i class="fas fa-search"></i>
                    </button>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row  justify-content-between pl-4 pr-2">
                        <b> Data product</b>
                        <br>
                        <a href="{{ url('admin/tambah') }}" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Nama barang</th>
                                <th>Deskripsi</th>
                                <th>Stok</th>
                                <th>Harga</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            @foreach($barangs as $barang)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $barang->nama_barang }}</td>
                                <td>{{ $barang->deskripsi }}</td>
                                <td>{{ $barang->stok }} unit</td>
                                <td>Rp. {{ number_format($barang->harga) }}</td>
                                <td>
                                    <div class="row justify-content-around">
                                        <a href="{{ url('edit') }}/{{ $barang->id }}" class="btn btn-warning btn-sm" ><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <form action="{{ url('admin/dataproduk') }}/{{$barang->id}}" method="post">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin untuk menghapus pesanan anda?')"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
