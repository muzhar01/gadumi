<!DOCTYPE html>

<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Gadumi | Admin Login</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('admin_assets/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('admin_assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/perfect-scrollbar.css')}}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('admin_assets/css/page-auth.css')}}" />
    <!-- Helpers -->
    <script src="{{ asset('admin_assets/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('admin_assets/js/config.js')}}"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="javascript:void(0)" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <img src="{{ asset('images/logo.svg') }}" style="height: 40px" alt="">
                  </span>
                  <span class="app-brand-text demo text-body fw-bolder">Gadumi</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Welcome to Gadumi 👋</h4>

              <form id="formAuthentication" class="mb-3" action="{{ route('admin.login.submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    value="{{old('email')}}"
                    autofocus
                  />
                  @error('email')
                   <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="javascript:void(0)">
                      <small>Forgot Password?</small>
                    </a>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                      value="{{old('password')}}"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                  @error('password')
                   <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('admin_assets/js/jquery.js')}}"></script>
    <script src="{{ asset('admin_assets/js/popper.js')}}"></script>
    <script src="{{ asset('admin_assets/js/bootstrap.js')}}"></script>
    <script src="{{ asset('admin_assets/js/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('admin_assets/js/menu.js')}}"></script>
    <script src="{{ asset('admin_assets/js/main.js')}}"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
