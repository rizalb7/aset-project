@extends('dashboard.layouts.main')
@section('content')
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Users</h5>

              <!-- Edit Users -->
              <form action="{{ url('dashboard/user', $user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row mb-3">
                  <label for="name" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" id="name"
                        class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" id="email"
                        class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}">
                    @error('email')
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