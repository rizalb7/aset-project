@extends('dashboard.layouts.main')
@section('content')
    @if (auth()->user()->role == 'superadmin')
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
              <center>
              <h5 class="card-title">User</h5>
              <!-- User -->
                  <td>{{\App\Models\DataOpd::whereId($aset->user->data_opd_id)->first()->nama_opd}}</td>
              </div>
            </center>
          </div>
    </div>
    @endif
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
              <center>
              <h5 class="card-title">Kategori</h5>
              <!-- Kategori -->
              @foreach (json_decode($aset->kategori_aset_id) as $item1)
                  <span class="badge bg-success">{{\App\Models\KategoriAset::whereId($item1)->first()->nama_kategori}}</span>
              @endforeach
              </center>
            </div>
          </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
              <center>
              <h5 class="card-title">Kode Barang</h5>
              <!-- Kode Barang -->
              {{$aset->kode_barang}}
            </center>
            </div>
          </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
              <center>
              <h5 class="card-title">Nama Barang</h5>
              <!-- Nama Barang -->
              {{$aset->nama_barang}}
            </center>
            </div>
          </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
              <center>
              <h5 class="card-title">Merk/Tipe</h5>
              <!-- Merk/Tipe -->
              {{$aset->merk_tipe}}
            </center>
            </div>
          </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
              <center>
              <h5 class="card-title">Ukuran</h5>
              <!-- Ukuran -->
              {{$aset->ukuran}}
            </center>
            </div>
          </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
              <center>
              <h5 class="card-title">Bahan</h5>
              <!-- Bahan -->
              {{$aset->bahan}}
            </center>
            </div>
          </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
              <center>
              <h5 class="card-title">Tahun Pembelian</h5>
              <!-- Tahun Pembelian -->
              {{$aset->tahun_pembelian}}
            </center>
            </div>
          </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
              <center>
              <h5 class="card-title">Harga</h5>
              <!-- Harga -->
              {{$aset->harga}}
            </center>
            </div>
          </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
              <center>
              <h5 class="card-title">Keterangan</h5>
              <!-- Keterangan -->
              {{$aset->keterangan}}
            </center>
            </div>
          </div>
    </div>
@endsection