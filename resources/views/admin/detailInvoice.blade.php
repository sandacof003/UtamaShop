@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-3">
            <a href="{{ url()->previous() }}"><i class="fa fa-arrow-left"></i> Kembali </a>
        </div>
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('admin/invoice') }}">Invoice</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Invoice</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3>Alamat {{$user->name}} </h3>
                    <h5>{{$user->alamat}}</h5>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <h3><i class="fa fa-shopping-cart"></i> Detail Invoice</h3>
                    @if(!empty($pesanan))
                    <p align="right">Pesan Tanggal : {{ $pesanan->tanggal }}</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Nama Pelanggan</th>
                                <th>Nama Barang</th>
                                <th>Deskripsi</th>
                                <th>jumlah</th>
                                <th>total harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $barang->nama_barang }}</td>
                                <td>{{ $barang->deskripsi }}</td>
                                <td>{{ $jumlah->jumlah }} unit</td>
                                <td>Rp. {{ number_format($pesanan->kode+$pesanan->jumlah_harga) }}</td>
                            </tr>
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
