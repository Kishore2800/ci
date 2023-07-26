<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>admin | form</title>

  <!-- Google Font: Source Sans Pro -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url();?>assets/vendor/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/adminlte.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?=base_url();?>assets/vendor/bs-stepper/css/bs-stepper.min.css">
   <!-- daterange picker -->
   <link rel="stylesheet" href="<?=base_url();?>assets/vendor/daterangepicker/daterangepicker.min.css">
</head>
<body class="hold-transition layout-top-nav">
	<form action="<?php echo base_url('Admin/admin_form')?>" method="post">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-maroon">
    <div class="container">
      <a href="../../index3.html" class="navbar-brand">
        <img src="" alt="" class="" style="" >
        <span class="brand-text font-weight-light"></span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
              <!-- Level two dropdown-->
                  <!-- Level three dropdown-->
                  <!-- End Level three --> 
              <!-- End Level two -->
            </ul>
          </li>
        </ul>

        <!-- SEARCH FORM -->
      <!-- Right navbar links -->
              <!-- Message End -->
        <!-- Notifications Dropdown Menu -->     
     
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> JAYA PRIYA GROUP OF COMPANIES <BR><small>DATA SHEET</small><BR></h1>
			<h5 class="m-0">FOR OFFICE USE ONLY</h5>
          </div><!-- /.col -->
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('Admin/admin_form');?>">Interviewer Form</a></li>
              <li class="breadcrumb-item active">Form</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
   
    <!-- Main content -->
    <div class="content" >
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body" >
              <div><?echo validation_errors()?></div>
              <form action="<?php echo base_url('admin/admin_saveData')?>" method="POST">
                <h5 class="card-title"><ins><b>RECRUITER</b></ins></h5><br><hr>
                <div class="mb-3 row">
                <div class="col-sm-4">
<label class="lable">#apticant_id :- </label>
</div>
<div class="col-sm-3">
<input type="text" name="apticant1" class="form-control" >
</div></div>
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
  <div class="container" style="text-align: center; display: flex; padding: 30px; margin: 20px; justify-content: center;">
                <div class="btn btn-submit" >              
                 <button type="submit" value="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
 </div>
 
</form>
<!--second card-->
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Powered by IT Team
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2023 <a href="https://jayapriyachits.com/">jayapriyachits.com</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- AdminLTE App -->
<script src="<?=base_url();?>assets/vendor/js/adminlte.min.js"></script>
<!-- jQuery -->
<script src="<?=base_url();?>assets/vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url();?>assets/js/adminlte.min.js"></script>
</form>
</body>
</html>
