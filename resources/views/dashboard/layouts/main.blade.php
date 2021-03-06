<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('template/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('template/assets/img/apple-touch-icon.png" rel="apple-touch-icon') }}">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('template/assets/css/style.css') }}" rel="stylesheet">

  @stack('css')
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="d-flex flex-column min-vh-100">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('template/assets/img/logo.png') }}" alt="">
        <span class="d-none d-lg-block">{{ config('app.name') }}</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">




        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{asset('template/assets/img/profile-img.jpg')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">{{auth()->user()->name}}</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>{{auth()->user()->name}}</h6>
              {{-- <span>Web Designer</span> --}}
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
{{-- 
            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li> --}}

            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right"></i>{{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{url('dashboard/home')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#aset-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Aset TIK</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="aset-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('dashboard/aset')}}">
              <i class="bi bi-circle"></i><span>Data Aset TIK</span>
            </a>
          </li>
          <li>
            <a href="{{url('dashboard/aset/create')}}">
              <i class="bi bi-circle"></i><span>Tambah Aset TIK</span>
            </a>
          </li>
          <li>
            <a href="{{url('dashboard/aset/importexport')}}">
              <i class="bi bi-circle"></i><span>Import/Export Aset TIK</span>
            </a>
          </li>
        </ul>
      </li><!-- End Aset Nav -->

      @if (auth()->user()->role == 'superadmin')
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#kataset-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window"></i><span>Kategori Aset TIK</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="kataset-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('dashboard/kategori-aset')}}">
              <i class="bi bi-circle"></i><span>Data Kategori</span>
            </a>
          </li>
          <li>
            <a href="{{url('dashboard/kategori-aset/create')}}">
              <i class="bi bi-circle"></i><span>Tambah Kategori</span>
            </a>
          </li>
        </ul>
      </li><!-- End Aset Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#opd-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-briefcase"></i><span>OPD</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="opd-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('dashboard/dataopd')}}">
              <i class="bi bi-circle"></i><span>Data OPD</span>
            </a>
          </li>
          <li>
            <a href="{{url('dashboard/dataopd/create')}}">
              <i class="bi bi-circle"></i><span>Tambah OPD</span>
            </a>
          </li>
        </ul>
      </li><!-- End OPD Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="user-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('dashboard/user')}}">
              <i class="bi bi-circle"></i><span>Data Users</span>
            </a>
          </li>
          <li>
            <a href="{{url('dashboard/user/create')}}">
              <i class="bi bi-circle"></i><span>Tambah Users</span>
            </a>
          </li>
        </ul>
      </li><!-- End OPD Nav -->
      @endif

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Data Aset TIK</span>
        </a>
      </li><!-- End Data Aset TIK Page Nav --> --}}

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-briefcase"></i>
          <span>Data OPD</span>
        </a>
      </li><!-- End Data OPD Page Nav --> --}}

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('dashboard/user')}}">
          <i class="bi bi-person"></i>
          <span>Data Users</span>
        </a>
      </li><!-- End Data Users Page Nav --> --}}

      {{-- <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            <i class="bi bi-box-arrow-in-right"></i>{{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </li><!-- End Login Page Nav --> --}}

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    {{-- <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title --> --}}

    <section class="section dashboard">
      <div class="row justify-content-center">

        @yield('content')
        
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer mt-auto">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('template/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/chart.js/chart.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('template/assets/js/main.js') }}"></script>

  @stack('js')
</body>

</html>