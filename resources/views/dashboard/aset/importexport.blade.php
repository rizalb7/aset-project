@extends('dashboard.layouts.main')
@section('content')
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Import Data Aset TIK
                @if (auth()->user()->role == 'admin_opd')
                    <b>{{\App\Models\DataOpd::whereId(auth()->user()->data_opd_id)->first()->nama_opd}}</b>
                @endif
              </h5>

              <!-- Import Data Aset TIK -->
              <form action="{{ url('dashboard/aset/import') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label for="file" class="col-sm-2 col-form-label">File Excel</label>
                  <div class="col-sm-10">
                    <input type="file" name="file" id="file"
                        class="form-control @error('file') is-invalid @enderror" value="{{ old('file') }}">
                    @error('file')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                
                <center>
                    <div class="row mb-3">
                      <div class="col">
                        <button type="submit" class="btn btn-success">Import</button>
                      </div>
                    </div>
                </center>

              </form><!-- End General Form Elements -->

            </div>
          </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Export Data Aset TIK
                @if (auth()->user()->role == 'admin_opd')
                    <b>{{\App\Models\DataOpd::whereId(auth()->user()->data_opd_id)->first()->nama_opd}}</b>
                @endif
              </h5>

              <!-- Export Data Aset TIK -->
              <center>
                <a class="btn btn-warning" href="{{route('export')}}">Export</a>
              </center>

            </div>
          </div>
    </div>
@endsection