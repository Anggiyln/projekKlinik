<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Free')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
  </head>

  <body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <!-- Sidebar Start -->
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
          <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="./index.html" class="text-nowrap logo-img">
<img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi1miw7VybuiGWPfJi4rOyZNbUrMW4aI1zsURKPS6bB7FBLm7vTMTcQeNMMXbMSr30_T_uDbBsrRgbMoy9mufINnK0TgpvpM6BpELSmk8uLJtQYYLa513CoxdlF1hyBf1t2RYOFQ_ANkBhc/s1600/bitebrands+-+logo+rumah+sakit+indonesia+dunia+-01.jpg" width="180" alt="Logo">
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
              <i class="ti ti-x fs-8"></i>
            </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Home</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="/home" aria-expanded="false">
                  <span><i class="ti ti-layout-dashboard"></i></span>
                  <span class="hide-menu">Dashboard</span>
                </a>
              </li>
                <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('poli.index') }}" aria-expanded="false">
                  <span><i class="ti ti-building-hospital"></i></span>
                  <span class="hide-menu">Data Poli</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('poli.create') }}" aria-expanded="false">
                  <span><i class="ti ti-plus"></i></span>
                  <span class="hide-menu">Tambah Poli</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('pasien.create') }}" aria-expanded="false">
                  <span><i class="ti ti-user-plus"></i></span>
                  <span class="hide-menu">Tambah Pasien</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('pasien.index') }}" aria-expanded="false">
                    <span><i class="ti ti-user"></i></span>
                    <span class="hide-menu">Data Pasien</span>
                </a>
            </li>


              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('daftar.index') }}" aria-expanded="false">
                  <span><i class="ti ti-clipboard"></i></span>
                  <span class="hide-menu">Data Pendaftaran Pasien</span>
                </a>
              </li>
                {{-- <li class="sidebar-item">
                    <a class="sidebar-link {{ request()->is('laporan-daftar') ? 'active' : '' }}"
                        href="/laporan-pasien/create" aria-expanded="false">
                        <span>
                            <i class="ti ti-user"></i>
                        </span>
                        <span class="hide-menu">Laporan Data Pendaftaran</span>
                    </a>
                    </li> --}}
            </ul>
          </nav>
        </div>
      </aside>

      <!--  Main wrapper -->
      <div class="body-wrapper">
        <!--  Header Start -->
        <header class="app-header">
          <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav">
              <li class="nav-item d-block d-xl-none">
                <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                  <i class="ti ti-menu-2"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                  <i class="ti ti-bell-ringing"></i>
                  <div class="notification bg-primary rounded-circle"></div>
                </a>
              </li>
            </ul>
            <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
              <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                {{-- <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Download Free</a> --}}
                <li class="nav-item dropdown">
                  <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('assets/images/profile/user-1.jpg') }}" alt="" width="35" height="35" class="rounded-circle" />
                  </a>
                  <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                    <div class="message-body">
                      <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                        <i class="ti ti-user fs-6"></i>
                        <p class="mb-0 fs-3">My Profile</p>
                      </a>
                      <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                        <i class="ti ti-mail fs-6"></i>
                        <p class="mb-0 fs-3">My Account</p>
                      </a>
                      <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                        <i class="ti ti-list-check fs-6"></i>
                        <p class="mb-0 fs-3">My Task</p>
                      </a>
                      <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                      </form>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </header>
        <!--  Header End -->

        <div class="container-fluid">
          @include('flash::message')
          @yield('content')
        </div>
      </div>
    </div>

    <!-- JS Scripts -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.js') }}"></script>

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
      $(document).ready(function () {
        $('.select2').select2();
      });
    </script>
  </body>
</html>
