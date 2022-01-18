@extends('dashboard.layouts.main')
@section('content')
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tambah Users</h5>

              <!-- Tambah Users -->
              <form action="{{ url('dashboard/user') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label for="name" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" id="name"
                        class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" id="email"
                        class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="password" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" id="password"
                        class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Role User</label>
                  <div class="col-sm-10">
                    <select name="role" id="role" class="form-select" aria-label="Default select example">
                      {{-- <option selected>-Pilih Role User-</option> --}}
                      <option value="admin_opd" selected>Admin OPD</option>
                    </select>
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Admin OPD</label>
                  <div class="col-sm-10">
                    <select name="data_opd_id" id="data_opd_id" class="form-select" aria-label="Default select example">
                      <option selected>-Pilih OPD-</option>
                        @foreach ($opds as $item)
                            <option value="{{$item->id}}">{{$item->nama_opd}}</option>
                        @endforeach
                    </select>
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