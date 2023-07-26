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
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
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
                <a href="<?=base_url('admin/Recruiter');?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recruiter</p>
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
            <h1></h1>
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

    <div class="content" >
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body" >
              <div><?echo validation_errors()?></div>
              <form action="<?php echo base_url('admin/saveForm')?>" method="POST">
                <h5 class="card-title"><ins><b>RECRUITER</b></ins></h5><br><hr>
                <div class="mb-3 row">
				<div class="col-sm-4">
      <label class="lable">Interviewer Name:- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="inter_name" class="form-control" >
    </div>
</div>


<div class="mb-3 row">
				<div class="col-sm-4">
      <label class="lable">Interviewer Designation:- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="inter_desig" class="form-control" >
    </div>
</div>



<div class="mb-3 row">
				<div class="col-sm-4">
      <label class="lable">Interview Date:- </label>
    </div>
     <div class="col-sm-8">
      <input type="Date" name="inter_date" class="form-control" >
    </div>
</div>



<div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Interview Location:- </label>
    </div>
     <div class="col-sm-8">
     <select name="inter_location" class="form-control" >
      <option value="">Select Location</option>
        <option value="Ariyalur">Ariyalur</option>
        <option value="Chengalpattu">Chengalpattu</option>
        <option value="Chennai">Chennai</option>
		<option value="Coimbatore">Coimbatore</option>
		<option value="Cuddalore">Cuddalore</option>
		<option value="Dharmapuri">Dharmapuri</option>
		<option value="Dindigul">Dindigul</option>
		<option value="Erode">Erode</option>
		<option value="Kallakurichi">Kallakurichi</option>
		<option value="Kancheepuram">Kancheepuram</option>
		<option value="Karur">Karur</option>
		<option value="Krishnagiri">Krishnagiri</option>
		<option value="Madurai">Madurai</option>
		<option value="Mayiladuthurai">Mayiladuthurai</option>
		<option value="Nagapattinam">Nagapattinam</option>
		<option value="Nagercoil">Nagercoil</option>
		<option value="Namakkal">Namakkal</option>
		<option value="Perambalur">Perambalur</option>
		<option value="Pudukkottai">Pudukkottai</option>
		<option value="Ramanathapuram">Ramanathapuram</option>
		<option value="Ranipet">Ranipet</option>
		<option value="Salem">Salem</option>
		<option value="Sivagangai">Sivagangai</option>
		<option value="Tenkasi">Tenkasi</option>
		<option value="Thanjavur">Thanjavur</option>
		<option value="Theni">Theni</option>
		<option value="Thiruvallur">Thiruvallur</option>
		<option value="Thiruvarur">Thiruvarur</option>
		<option value="Thoothukudi">Thoothukudi</option>
    <option value="Tiruchirappalli">Tiruchirappalli</option>
		<option value="Tirunelveli">Tirunelveli</option>
		<option value="Tirupathur">Tirupathur</option>
		<option value="Tiruvannamalai">Tiruvannamalai</option>
		<option value="Udagamandalam">Udagamandalam</option>
		<option value="Vellore">Vellore</option>
		<option value="Viluppuram">Viluppuram</option>
		<option value="Virudhunagar">Virudhunagar</option>
     </select>
    </div>
    </div>


	<div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Recommendation:- </label>
    </div>
     <div class="col-sm-8">
     <select name="recommendation" class="form-control" >
      <option value="">Select Recommendation</option>
        <option value="Male">Selected on spot</option>
        <option value="Female">Shortlisted</option>
        <option value="Other">Hold</option>
		<option value="Other">Rejected</option>
     </select>
    </div>
    </div>


	<div class="mb-3 row">
				<div class="col-sm-4">
      <label class="lable">Interviewer Note:- </label>
    </div>
     <div class="col-sm-8">
	 <textarea type="text"  name="inter_note" class="form-control" ></textarea>
    </div>
 </div>
  </div>
 </div>
</form>
           
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