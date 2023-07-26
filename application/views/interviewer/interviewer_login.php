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
<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid ">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Login Dashboard</h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary ">
    <div class="card-header text-center">
    <h1><b>Login</b></a></h1>
    </div>
    <div class="card-body ">
      <p class="login-box-msg">Login to start your session</p>
      <?php if(isset($error_message)) { ?>
        <p><?php echo $error_message; ?></p>
      <?php } ?>
      <div><?echo validation_errors()?></div>
      <form action="<?php echo base_url('admin/saveForm')?>" method="POST">
        <div class="input-group mb-3">
          <input type="text" name="iusername" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="ipassword" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">LogIn</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.card-body -->
  </div>
    <div class="btn btn-sm">              
    </div>
  <!-- /.card -->
</div>
    <!-- /.content -->
  
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