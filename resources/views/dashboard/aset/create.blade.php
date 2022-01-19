@extends('dashboard.layouts.main')
@section('content')
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Data Aset TIK</h5>

              <!-- Tambah Data Aset TIK -->
              <form action="{{ url('dashboard/aset') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if (auth()->user()->role == 'superadmin')
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">User</label>
                    <div class="col-sm-10">
                      <select name="user_id" id="user_id" class="form-select">
                        <option selected disabled>-Pilih User-</option>
                          @foreach ($users as $item)
                              <option value="{{$item->id}}">{{$item->name}}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                @else
                  <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                @endif
                <div class="row mb-3">
                  <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
                  <div class="col-sm-10">
                    <input type="text" name="kode_barang" id="kode_barang"
                        class="form-control @error('kode_barang') is-invalid @enderror" value="{{ old('kode_barang') }}">
                    @error('kode_barang')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_barang" id="nama_barang"
                        class="form-control @error('nama_barang') is-invalid @enderror" value="{{ old('nama_barang') }}">
                    @error('nama_barang')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Kategori</label>
                  <div class="col-sm-10">
                    <select name="kategori_aset_id[]" id="kategori_aset_id" class="form-select" multiple aria-label="multiple select example">
                      <option selected disabled>-Pilih Kategori-</option>
                        @foreach ($kategori_asets as $item)
                            <option value="{{$item->id}}">{{$item->nama_kategori}}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="merk_tipe" class="col-sm-2 col-form-label">Merk/Tipe</label>
                  <div class="col-sm-10">
                    <input type="text" name="merk_tipe" id="merk_tipe"
                        class="form-control @error('merk_tipe') is-invalid @enderror" value="{{ old('merk_tipe') }}">
                    @error('merk_tipe')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="ukuran" class="col-sm-2 col-form-label">Ukuran</label>
                  <div class="col-sm-10">
                    <input type="text" name="ukuran" id="ukuran"
                        class="form-control @error('ukuran') is-invalid @enderror" value="{{ old('ukuran') }}">
                    @error('ukuran')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="bahan" class="col-sm-2 col-form-label">Bahan</label>
                  <div class="col-sm-10">
                    <input type="text" name="bahan" id="bahan"
                        class="form-control @error('bahan') is-invalid @enderror" value="{{ old('bahan') }}">
                    @error('bahan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="tahun_pembelian" class="col-sm-2 col-form-label">Tahun Pembelian</label>
                  <div class="col-sm-10">
                    <input type="number" name="tahun_pembelian" id="tahun_pembelian"
                        class="form-control @error('tahun_pembelian') is-invalid @enderror" value="{{ old('tahun_pembelian') }}">
                    @error('tahun_pembelian')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="harga" class="col-sm-2 col-form-label">Harga (Rp)</label>
                  <div class="col-sm-10">
                    <input type="number" name="harga" id="harga"
                        class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga') }}">
                    @error('harga')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                  <div class="col-sm-10">
                    <textarea name="keterangan" id="keterangan" cols="30" rows="3"
                        class="form-control @error('keterangan') is-invalid @enderror"
                        >{{ old('keterangan') }}</textarea>
                    @error('keterangan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                
                <center>
                    <div class="row mb-3">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>
                </center>

              </form><!-- End General Form Elements -->

            </div>
          </div>
    </div>
@endsection