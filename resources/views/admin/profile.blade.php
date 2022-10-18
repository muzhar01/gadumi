@extends('admin.layout')
@section('container')
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>
    <div class="row">
      <div class="col-lg-12">
        @if (Session::has('success'))
        <div class="alert alert-primary alert-dismissible" role="alert">
          {{ Session::get('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissible" role="alert">
          {{ Session::get('error') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
      </div>
      <div class="col-md-6">
        <div class="card mb-4">
          <h5 class="card-header">Profile Details</h5>
          <!-- Account -->
          <form method="POST" action="{{ route('admin-profile-details') }}" enctype="multipart/form-data">
          @csrf
            <div class="card-body">
              <div class="d-flex align-items-start align-items-sm-center gap-4">
                <img src="{{ asset($admin->image ?? 'admin_assets/avatars/1.png') }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="output">
                <div class="button-wrapper">
                  <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                    <span class="d-none d-sm-block">Upload new photo</span>
                    <i class="bx bx-upload d-block d-sm-none"></i>
                    <input type="file" id="upload" name="image" class="account-file-input" onchange="loadFile(event)" hidden="" accept="image/png, image/jpeg">
                  </label>

                  <p class="text-muted mb-0">Allowed JPG, GIF or PNG.</p>
                </div>
              </div>
            </div>
            <hr class="my-0">
            <div class="card-body">
                <div class="row">
                  <div class="mb-3 col-md-6">
                    <label for="firstName" class="form-label">Name</label>
                    <input class="form-control" type="text" id="firstName" name="name" value="{{ $admin->name }}" autofocus="">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input class="form-control" type="text" id="email" name="email" value="{{ $admin->email }}" placeholder="Email">
                  </div>
                </div>
                <div class="mt-1">
                  <button type="submit" class="btn btn-primary me-2">Save changes</button>
                </div>
            </div>
          </form>
          <!-- /Account -->
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <h5 class="card-header">Change Password</h5>
          <form action="{{ route('admin-change-password') }}" method="post">
            @csrf
            <div class="card-body">
              <div class="mb-12 col-md-12">
                <label for="current_password" class="form-label">Current Password</label>
                <input class="form-control" type="password" id="current_password" name="current_password" placeholder="Current Password">
                @error('current_password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="mb-12 col-md-12">
                <label for="password" class="form-label">New Password</label>
                <input class="form-control" type="password" id="password" name="password" placeholder="New Password">
                
                @error('password')
                <span class="text-danger">{{ $message }}</span>
               @enderror
              </div>
              <div class="mb-12 col-md-12">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" placeholder="Cofirm Password">
                @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
               @enderror
              </div>
              <div class="mt-4">
                <button type="submit" class="btn btn-primary me-2">Change</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- / Content -->

  <div class="content-backdrop fade"></div>
</div>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
@endsection
