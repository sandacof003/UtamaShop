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
                    <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
        </div>
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-body">
                    <h4>
                        <i class="fa fa-pencil-alt"></i>
                        Edit Product
                    </h4>
                    <hr>
                    <form method="POST" action="{{ url('/admin/dataproduk/edit') }}/{{$barang->id}}">
                        @csrf

                        <div class="form-group row">
                            <label for="nama_barang" class="col-md-2 col-form-label text-md-right">Nama Barang</label>

                            <div class="col-md-6">
                                <input id="nama_barang" type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" value="{{$barang->nama_barang}}" required autocomplete="nama_barang" autofocus>

                                @error('nama_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kategori" class="col-md-2 col-form-label text-md-right">Kategori</label>

                            <div class="col-md-6">
                                <input id="kategori" type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori" value="{{$barang->kategori}}" disabled autocomplete="kategori">

                                @error('kategori')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-2 col-form-label text-md-right">Deskripsi</label>

                            <div class="col-md-6">
                                <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" required>{{$barang->deskripsi}}</textarea>

                                @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stok" class="col-md-2 col-form-label text-md-right">Stok</label>

                            <div class="col-md-6">
                                <input type="number" id="stok" type="text" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{$barang->stok}}" required autocomplete="stok" autofocus>

                                @error('stok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="berat" class="col-md-2 col-form-label text-md-right">Berat</label>

                            <div class="col-md-6">
                                <input type="number" id="berat" type="text" class="form-control @error('berat') is-invalid @enderror" name="berat" value="{{$barang->berat}}" required autocomplete="berat" autofocus>

                                @error('berat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga" class="col-md-2 col-form-label text-md-right">Harga</label>

                            <div class="col-md-6">
                                <input id="harga" type="number" class="form-control  @error('harga') is-invalid @enderror" value="{{$barang->harga}}" name="harga" >

                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
