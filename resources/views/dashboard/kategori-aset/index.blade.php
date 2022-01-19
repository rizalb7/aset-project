@extends('dashboard.layouts.main')
@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <div class="col-lg-12">
        <div class="card">
        <div class="card-body">
            <h5 class="card-title">Data Kategori Aset TIK</h5>
            <!-- Table with stripped rows -->
            <table class="table datatable">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategori_asets as $item)
                    <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item->nama_kategori}}</td>
                    <td>
                        <center>
                            <a href="{{ url('dashboard/kategori-aset/' . $item->id . '/edit') }}"
                                class="btn btn-info btn-sm" title="Edit kategori-aset">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </center>
                    </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
            <!-- End Table with stripped rows -->

        </div>
        </div>

    </div>
@endsection