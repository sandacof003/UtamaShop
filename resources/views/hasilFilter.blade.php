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
                    <li class="breadcrumb-item active" aria-current="page">Check-out</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Hasil Fitler</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Nama barang</th>
                                <th>Deskripsi</th>
                                <th>harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><a href="{{ url('pesan') }}/{{ $barangs->barang_id }}">{{ $barangs->nama_barang }}</a></td>
                                <td>{{ $barangs->deskripsi }}</td>
                                <td>Rp. {{ number_format($barangs->harga) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
