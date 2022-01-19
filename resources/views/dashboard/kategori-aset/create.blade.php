@extends('dashboard.layouts.main')
@section('content')
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Kategori Aset TIK</h5>

              <!-- Tambah Kategori Aset TIK -->
              <form action="{{ url('dashboard/kategori-aset') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label for="nama_kategori" class="col-sm-2 col-form-label">Nama Kategori</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_kategori" id="nama_kategori"
                        class="form-control @error('nama_kategori') is-invalid @enderror" value="{{ old('nama_kategori') }}">
                    @error('nama_kategori')
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