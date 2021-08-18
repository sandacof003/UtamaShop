@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-5">
            <img src="{{ url('images/logo.jpg')}}" class="rounded mx-auto d-block" width="300" alt="">
        </div>
        <div class="col-md-12">
            <div class="row justify-content-around">
                <a href="{{ url('/admin/dataproduk') }}" class="card" style="width: 18rem; height: 18rem;">
                    <button type="button" class="btn btn-primary" style="width: 18rem; height: 18rem;">
                        <i class="fas fa-archive"></i>
                        <br>
                        <b>Data Produk</b>
                    </button>
                </a>
                <a href="{{ url('/admin/invoice') }}" class="card" style="width: 18rem; height: 18rem;">
                    <button type="button" class="btn btn-success" style="width: 18rem; height: 18rem;">
                        <i class="fas fa-file-invoice-dollar"></i>
                        <br>
                        <b>Invoice</b>
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
