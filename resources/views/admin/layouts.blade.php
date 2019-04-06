<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="{{ asset('srcAdmin/img/favicon.png')}}" type="image/png">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Bitmap Photography</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('srcAdmin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('srcAdmin/vendors/linericon/style.css')}}">

  <!-- Custom styles for this template-->
  <link href="{{ asset('srcAdmin/css/sb-admin-2.min.css')}}" rel="stylesheet">

  <!-- Css Tambahan -->
  @yield('addCss')

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('my-admin')}}">
        <div class="sidebar-brand-icon rotate-n-15">
          <img src="{{ asset('srcAdmin/img/logo-2.png')}}">
        </div>
        <div class="sidebar-brand-text mx-3">Bitmap Photograp</div>
      </a>

      <!-- Divider -->
      
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Primary Layout
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li id="pr-def" class="nav-item">
        <a class="nav-link" href="{{ route('my-admin')}}">
          <i class="fas fa-fw fa-cog"></i>
          <span>Default</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Secondary Layout
      </div>

      <!-- Nav Item - Gallery -->
      <li id="sc-gal" class="nav-item">
        <a class="nav-link" href="{{ route('sc-galeri')}}">
          <i class="fas fa-fw fa-images"></i>
          <span>Gallery</span></a>
      </li>

      <!-- Nav Item - Service -->
      <li id="sc-ser" class="nav-item">
        <a class="nav-link" href="{{ route('sc-service')}}">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Service</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li id="sc-abt" class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-scroll"></i>
          <span>About</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Komponen</h6>
            <a class="collapse-item" href="{{ route('sc-sambutan')}}">Sambutan</a>
            <a class="collapse-item" href="{{ route('sc-team')}}">Team</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Service -->
      <li id="sc-con" class="nav-item">
        <a class="nav-link" href="{{ route('sc-kontak')}}">
          <i class="fas fa-fw fa-phone-square"></i>
          <span>Contact</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="{{ asset('srcFront/img/testimonials/test-1.png')}}">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('home')}}" target="_blank">
                  <i class="fas fa-eye fa-sm fa-fw mr-2 text-gray-400"></i>
                  Preview
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
        @yield('content')
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
            Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('srcAdmin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('srcAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('srcAdmin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('srcAdmin/js/sb-admin-2.min.js')}}"></script>

  <!-- Tambahan script -->
  @yield('addScript')

</body>

</html>