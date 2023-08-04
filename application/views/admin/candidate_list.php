<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>careers list | display </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url();?>assets/vendor/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=base_url();?>assets/vendor/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/adminlte.min.css">
   <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url();?>a/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url();?>a/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url();?>a/css/buttons.bootstrap4.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md  ">
    <div class="container" >
        <img src="<?=base_url();?>assets/images/logo.png" alt="JpLogo" class="brand-image img-rectangle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"></span>
      </a>   
      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <div class="btn btn-logout" >              
                  <a href="<?=base_url('Admin/login');?>"> <button type="logout" value="logout" class="btn btn-primary" style="background-color: red";>Logout</button></a>
                </div>
      </div>
<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">  </a>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="background-color: rgb(137, 60, 63)"; >
      <div class="container" >
        <div class="row mb-2">
          <div class="col-sm-12">
          <center><justify><h1 class="m-0" style="color: white";>Jayapriya Group Of Companies<br><small><span>DATA SHEET</span></small></h1></justify></center>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

 <!-- Right navbar links -->

      <!-- Navbar Search -->
    <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
        </a>
        <form class="form-inline">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                     <i class="fas fa-search"></i>
                </button>
                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                </button>
        </form>
        </div>
    </li>
          
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('Admin/candidate_list');?>">Home</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="card">
              <div class="card-header">
                <h3 class="card-title">No. Of Candidates are applyed</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="<?php echo base_url('Admin/displaydata')?>" method="POST"></form>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>S.No</th>
                        <th>#User id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>DOB</th>
                        <th>Mobile</th>
                        
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($candidates as $users) {?>
                    <tr>
                    <td><?=$users->id?></td>
                    <td><?=$users->userid?></td>
                    <td><?=$users->name?></td>
                    <td><?=$users->lname?></td>
                    <td><?=$users->dob?></td>
                    <td><?=$users->p_mobile; ?></td>
                        <td>
                            <a href="<?=base_url('admin/displaydata/'.$users->id)?>" class="btn btn-sm btn-primary">view</a>
                        </td>
                        <td>
                        <a href="<?=base_url('admin/deleteUser/'.$users->id)?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                        </tr>  
                        <?php }?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


            
</body>
</html>
