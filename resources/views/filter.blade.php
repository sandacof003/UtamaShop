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
                    <li class="breadcrumb-item active" aria-current="page">Filter</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12 mt-2">
            <div class="card">
                <div class="card-body">
                    <h4>
                        Filter
                    </h4>
                    <hr>
                    <form method="GET" action="{{ url('filter/cari') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="cpu">Processor :</label>
                            <select id="cpu" name="cpu">
                            <option value="kuat">Kuat</option>
                            <option value="cukup">Cukup</option>
                            <option value="lemah">Lemah</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="ram">Ram :</label>
                            <select id="ram" name="ram" >
                            <option value="kuat">Kuat</option>
                            <option value="cukup">Cukup</option>
                            <option value="lemah">Lemah</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="vga">VGA :</label>
                            <select id="vga" name="vga">
                            <option value="kuat">Kuat</option>
                            <option value="cukup">Cukup</option>
                            <option value="lemah">Lemah</option>
                            </select>
                        </div>
                        <div class="form-group row mb-0 justify-content-end">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit"class="btn btn-primary">CARI</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
