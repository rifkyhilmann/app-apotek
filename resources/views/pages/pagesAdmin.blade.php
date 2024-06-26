<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pages User</title>
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 flex flex-col items-center">
    <!-- Brand Logo -->
    
    <div class="h-24 w-full  flex items-center ">
        <img src="{{ asset('icons/Logo.png') }}" class="h-12 w-12 ml-3 mr-3" alt="Image Logo">
        <p class="text-white text-md font-bold">Toko Obat Bahagia</p>
    </div>

    <div class="h-16 w-11/12  flex items-center border-t border-b border-gray-400 my-1 ">
        <img src="{{ asset('icons/admin.png') }}" class="h-12 w-12 ml-3 mr-4" alt="Image Admin">
        <p class="text-white text-lg">Admin</p>
    </div>

    <!-- Sidebar -->
    <div class="sidebar mt-2 w-full">
      <!-- Sidebar user panel (optional) -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column gap-1 " data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item ">
                <a href="{{ route(('admin.dashboard')) }}" class="nav-link h-12 flex items-center gap-2">
                  <i class="nav-icon fas fa-home "></i>
                  <p class="text-md">
                    Dashboard
                  </p>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route(('admin.MasterDataAdmin')) }}" class="nav-link h-12 flex items-center gap-2">
                  <i class="nav-icon fas fa-database "></i>
                  <p class="text-md">
                    Master Data
                  </p>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route(('admin.Product')) }}" class="nav-link h-12 flex items-center gap-2">
                  <i class="nav-icon fas fa-medkit "></i>
                  <p class="text-md">
                    Product
                  </p>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route(('admin.Penjualan')) }}" class="nav-link h-12 flex items-center gap-2">
                  <i class="nav-icon fas fa-shopping-cart "></i>
                  <p class="text-md">
                    Penjualan
                  </p>
                </a>
            </li>
            <li class="nav-item ">
                <a href="{{ route(('admin.login')) }}" class="nav-link h-12 flex items-center gap-2">
                  <i class="nav-icon fas fa-cog "></i>
                  <p class="text-md">
                    Sign Out
                  </p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper flex justify-center h-max min-h-96">
      <div class="content flex w-full h-full min-h-96 ">
          @yield('content')
      </div>
  </div>
  <!-- /.content-wrapper -->



<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->

<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
