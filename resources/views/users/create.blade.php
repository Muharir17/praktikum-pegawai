@extends('adminlte::page')

@section('title', 'Data User')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Data Pengguna</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-dark">
                    <h2>Tambah Data Pengguna</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="form-label col-sm-2">Nama Pengguan</label>
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="name" placeholder="Masukkan Nama">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
