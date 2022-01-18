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
            <h5 class="card-title">Data Users</h5>
            <!-- Table with stripped rows -->
            <table class="table datatable">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->role}}</td>
                    <td>
                        <center>
                            <a href="{{ url('dashboard/user/' . $item->id . '/edit') }}"
                                class="btn btn-info btn-sm" title="Edit User">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ url('dashboard/user/' . $item->id) }}" method="post"
                                class="d-inline" onsubmit="return confirm('Yakin hapus data ini?')">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
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