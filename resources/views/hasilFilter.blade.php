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
                        <li class="breadcrumb-item active" aria-current="page">Our-Recommendation</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Rekomendasi Kami <?php echo $rekomendasi; ?></h3>
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
                                <?php $no = 1; ?>
                                @foreach ($barangs as $barang)
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td>
                                            <a href="{{ url('pesan') }}/<?php echo $barang->id; ?>"><?php echo $barang->nama_barang; ?></a>
                                        </td>
                                        <td>{{ $barang->deskripsi }}</td>
                                        <td>Rp. {{ number_format($barang->harga) }}</td>
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
