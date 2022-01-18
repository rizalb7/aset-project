@extends('dashboard.layouts.main')
@section('content')
    <div class="col-lg-12">
        <h1>Selamat Datang <span style="color:blue"><b>{{auth()->user()->name}}</b></span></h1>
    </div>
@endsection