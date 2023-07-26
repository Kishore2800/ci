<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url();?>assets/vendor/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=base_url();?>assets/vendor/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/adminlte.min.css">
  <style>
        .login-box {
            display: flex;
            justify-content: right;
            align-items: center;
            height: 500px;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <div class="header">
        <h1 style="text-align: center";>JAYAPRIYA ADMIN PANEL</h1>
    </div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?=base_url('admin/dashboard');?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    
    </ul>
   
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
    
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
               
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="<?= site_url('Admin/logout') ?>">Logout</a>
            </li>
          </form>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-link">
          <a  class="btn btn-primary btn-danger" href="<?= site_url('Admin/login') ?>">Logout</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="https://jayapriyachits.com/" class="brand-link">
      <img src="<?=base_url();?>assets/images/logo.png" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">ADMIN PANEL</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?=base_url('management/dashboard');?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?=base_url('admin/candidate_list');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recruiter</p>
                </a>
            </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/interviewer1');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>interviewer 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/interviewer2');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>interviewer 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('admin/interviewer3');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>interviewer 3</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Login Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin/dashboard#">Home</a></li>
              <li class="breadcrumb-item active">Login</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Recruiter</h5>
        <p class="card-text">Recruiter Form Filling</p>
        <a href="<?=base_url('admin/interview');?>" class="btn btn-primary btn-primary">Login Recruiter</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">interviewer1</h5>
        <p class="card-text">Interviewer 1 Form Filling</p>
        <a href="<?=base_url('admin/interview');?>" class="btn btn-primary btn-primary">Login interviewer 1</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">interviewer2</h5>
        <p class="card-text">Interviewer 2 Form Filling</p>
        <a href="<?=base_url('admin/interview');?>" class="btn btn-primary btn-primary">Login interviewer 2</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">interviewer3</h5>
        <p class="card-text">Interviewer 3 Form Filling</p>
        <a href="<?=base_url('admin/interview');?>" class="btn btn-primary btn-primary">Login interviewer 3</a>
      </div>
    </div>
  </div>
</div>
      </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Powered by IT Team
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2023 <a href="https://jayapriyachits.com/">jayapriyachits.com</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
 <!-- jQuery -->
<script src="<?=base_url();?>assets/vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url();?>assets/vendor/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url();?>assets/js/adminlte.min.js"></script>
    <script src="<?= base_url('assets/js/admin.js') ?>"></script>
    </body>
</html>