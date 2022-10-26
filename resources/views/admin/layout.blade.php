<!DOCTYPE html>
<html
   lang="en"
   class="light-style layout-menu-fixed"
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
      <title>Gadumi | Admin Dashboard</title>
      <meta name="csrf-token" content="{{ csrf_token() }}">
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
      <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
   </head>
   <body>
      <!-- Layout wrapper -->
      <div class="layout-wrapper layout-content-navbar">
         <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
               <div class="app-brand demo">
                  <a href="{{ route('admin.dashboard')}}" class="app-brand-link">
                     <span class="app-brand-logo demo">
                        <img src="{{ asset('images/logo.svg') }}" style="height: 40px" alt="">
                     </span>
                     <span class="app-brand-text demo menu-text fw-bolder ms-2">Gadumi</span>
                  </a>
                  <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                  <i class="bx bx-chevron-left bx-sm align-middle"></i>
                  </a>
               </div>
               <div class="menu-inner-shadow"></div>
               <ul class="menu-inner py-1">
                  <!-- admin.dashboard -->
                  <li class="menu-item {{ request()->is('admin.dashboard') ? 'active' : ''}}">
                     <a href="{{ route('admin.dashboard')}}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div data-i18n="Analytics">Dashboard</div>
                     </a>
                  </li>
                  <li class="menu-item {{ request()->is('course') ? 'active' : ''}}">
                     <a href="{{ route('courses-index') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-dock-top"></i>
                        <div data-i18n="Account Settings">Course</div>
                     </a>
                  </li>
                  <li class="menu-item">
                     <a href="{{ route('lesson-index') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                        <div data-i18n="Authentications">Lesson</div>
                     </a>
                  </li>
                  <li class="menu-item">
                     <a href="{{ route('exercise-index') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                        <div data-i18n="Misc">Exercise</div>
                     </a>
                  </li>
                  <li class="menu-item">
                     <a href="{{ route('setting-index') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                        <div data-i18n="Misc">Settings</div>
                     </a>
                  </li>
               </ul>
            </aside>
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
               <!-- Navbar -->
               <nav
                  class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                  id="layout-navbar"
                  >
                  <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                     <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                     <i class="bx bx-menu bx-sm"></i>
                     </a>
                  </div>
                  <div class="navbar-nav align-items-center">
                     <div class="nav-item d-flex align-items-center">
                        <a href="{{ url('/') }}" target="_blank" rel="noopener noreferrer">
                          <img src="{{ asset('images/globe.png') }}" alt="">
                        </a>                       
                     </div>
                   </div>
                  <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                     <ul class="navbar-nav flex-row align-items-center ms-auto">
                      
                        <!-- User -->
                        <x-profile-dropdown></x-profile-dropdown>
                        <!--/ User -->
                     </ul>
                  </div>
               </nav>
               <!-- / Navbar -->
               @yield('container')
              </div>
              <!-- / Layout page -->
           </div>
           <!-- Overlay -->
           <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- / Layout wrapper -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="{{ asset('admin_assets/js/jquery.js')}}"></script>
        <script src="{{ asset('admin_assets/js/popper.js')}}"></script>
        <script src="{{ asset('admin_assets/js/bootstrap.js')}}"></script>
        <script src="{{ asset('admin_assets/js/perfect-scrollbar.js')}}"></script>
        <script src="{{ asset('admin_assets/js/menu.js')}}"></script>
        <script src="{{ asset('admin_assets/js/main.js')}}"></script>
        <!-- Vendors JS -->
        <script src="{{ asset('admin_assets/js/apexcharts.js')}}"></script>
        <!-- Page JS -->
        <script src="{{ asset('admin_assets/dashboards-analytics.js')}}"></script>
        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
     </body>
  </html>