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
            <h5 class="card-title">Data Aset TIK</h5>
            <!-- Table with stripped rows -->
            <table class="table datatable">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Kategori</th>
                @if (auth()->user()->role == 'superadmin')
                    <th scope="col">OPD</th>
                @endif
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($asets as $item)
                    <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item->kode_barang}}</td>
                    <td>{{$item->nama_barang}}</td>
                    <td>{{$item->kategori_aset_id}}</td>
                    @if (auth()->user()->role == 'superadmin')
                        <td>{{\App\Models\DataOpd::whereId($item->user->data_opd_id)->first()->nama_opd}}</td>
                    @endif
                    <td>
                        <center>
                            <a href="{{ url('dashboard/aset/' . $item->id . '/edit') }}"
                                class="btn btn-info btn-sm" title="Edit aset">
                                <i class="bi bi-pencil"></i>
                            </a>
                            @if ($item->role != 'superadmin')
                                <form action="{{ url('dashboard/aset/' . $item->id) }}" method="post"
                                    class="d-inline" onsubmit="return confirm('Yakin hapus data ini?')">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            @endif
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