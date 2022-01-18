@extends('dashboard.layouts.main')
@section('content')
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Data OPD</h5>

              <!-- Edit Data OPD -->
              <form action="{{ url('dashboard/dataopd', $dataopd->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row mb-3">
                  <label for="nama_opd" class="col-sm-2 col-form-label">Nama OPD</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama_opd" id="nama_opd"
                        class="form-control @error('nama_opd') is-invalid @enderror" value="{{ old('nama_opd', $dataopd->nama_opd) }}">
                    @error('nama_opd')
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