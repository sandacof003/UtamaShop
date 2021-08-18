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
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row  justify-content-between pl-4 pr-2">
                        <h4>
                            <i class="fa fa-user"></i>
                            My profile
                        </h4>
                        <br>
                        <a href="{{ url('admin/edit/profile') }}" class="btn btn-success btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Name </td>
                                <td width="10">: </td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td>E-mail </td>
                                <td>: </td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td>No Handphone </td>
                                <td>: </td>
                                <td>{{ $user->nohp }}</td>
                            </tr>
                            <tr>
                                <td>Alamat </td>
                                <td>: </td>
                                <td>{{ $user->alamat }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
