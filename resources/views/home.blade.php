@extends('adminlte::page')

@section('title', 'Home Penggajian')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0 text-bold">Selamat Datang <span style="color: hotpink;">{{ Auth::user()->name }}</span> Di aplikasi penggajian. &hearts;</p>
                </div>
            </div>
        </div>
    </div>
@stop
