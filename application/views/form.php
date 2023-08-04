<?php
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>REGISTRATION | FORM</title>

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
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md  ">
    <div class="container" >
      
       <a href="https://jayapriyachits.com/"> <img src="<?=base_url();?>assets/images/logo.png" alt="JpLogo" class="brand-image img-rectangle elevation-3" style="opacity: 5.8"></a>
        <span class="brand-text font-weight-light"></span>
      </a>

      <!--<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>-->
                
      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <div class="btn btn-logout" >              
                  <a href="<?=base_url('user/logout');?>"> <button type="logout" value="logout" class="btn btn-primary" style="background-color: red";>Logout</button></a>
                </div>
                <div class="btn btn-sm">              
                  <a href="<?=base_url('user/update_password');?>"> <button type="change_password" value="change_password" class="btn btn-primary">Change Password</button></a>
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
    <!-- /.content-header -->
    <br /><br />
   
    <!-- Main content -->
    <div class="content" style="background-color: #skyblue";>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline" style="padding: 50px; margin: 20px;">
          
                  <div class="card-body">
                  <?php if (isset($errors)) { ?>
                    <div class="error-message">
                  <?php echo $errors; ?>
                    </div>
                  <?php } ?>
                <div><?echo validation_errors()?></div>
              <form action="<?php echo base_url('User/saveData')?>" method="POST"  enctype="multipart/form-data">
             <h5 class="card-title">How do you know jayapriya group of companies?<span style= "color: red"; >*</span></h5><br><br>
                
      <div class="col-sm-4">
     <select name="howdoyou" id="OperationType" value="<?php echo set_value('howdoyou'); ?>"  class="form-control" onchange="check();">
      <option value="">--Select--</option>
        <option value="Social Media">Social Media</option>
        <option value="Paper Ad">Paper Ad</option>
        <option value="Refered by MD/Chairman">Refered by MD/Chairman</option>
        <option value="Job portal">Job portal</option>
        <option value="OpNo">Agent</option>
        <option value="OpNo">Others</option>
     </select>
     <?php echo form_error('howdoyou'); ?>
    </div><br>
          <div class="custom-control custom-radio">
          <div class="row">
            <div class="col-sm-3">
            <label for="customRadio7" id=OperationNos class="custom-control-text">Employee Referenced-Name :- <input type="text" name="emp_ref" id=OperationNos class="form-control"></label>
          </div></div></div>
        <br>
        <div class="container">
        </div>
         
  <div class="col-sm-6">
  <div class="row">
    <div class="col-sm-12">
    <div class="form-group" style="float: right;">
         <label class="lable"> Photo </label>
   <div style="border: 1px solid black; height: 150px; width: 150px;  background: #F5FAFF;">
      <img id="output"  width="150" height="150" / style="display:none">
  </div>

      <input type="file" name="img" id="image" onchange="loadFile(event)"  value="<?php echo set_value('img'); ?>" class="form-control" required accept="image/*">
      <?php echo form_error('img'); ?>
</div>
</div>
</div>
</div>


<div class="row">
    <div class="col-sm-6">
    <div class="form-group" style="float: left;">
         <label class="lable"> Resume:- </label>
    <input type="file" name="resume" id="resume"  value="<?php echo set_value('resume'); ?>" class="form-control" required accept="file/*" / style="width:" >
    <?php echo form_error('resume'); ?>
</div>
</div>
</div>               
          
<br>
<!--persional details-->
<div class="row">
    <div class="col-sm-10">
      <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">First Name<span style= "color: red"; >*</span>:- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="name" value="<?php echo set_value('name'); ?>" class="form-control" >
      <?php echo form_error('name'); ?>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Last Name<span style= "color: red"; >* </span> :- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="lname" value="<?php echo set_value('lname'); ?>" class="form-control" >
      <?php echo form_error('lname'); ?>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Age<span style= "color: red"; >* </span> :- </label>
    </div>
     <div class="col-sm-8">
      <input type="number" name="age" value="<?php echo set_value('age'); ?>" class="form-control" >
      <?php echo form_error('age'); ?>
    </div>
    </div>
   <!-- Date and time -->
   <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">DOB<span style= "color: red"; >* </span> :- </label>
    </div>
     <div class="col-sm-8" >
      <input type="date" name="dob" value="<?php echo set_value('dob'); ?>" id="dob" class="form-control" >
      <?php echo form_error('dob'); ?>
    </div>
    </div>




    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Gender<span style= "color: red"; >* </span> :- </label>
    </div>
     <div class="col-sm-8">
     <select name="gender" value="<?php echo set_value('gender'); ?>" class="form-control" >
      <option value="">Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
     </select><?php echo form_error('gender'); ?>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Father Name<span style= "color: red"; >* </span> :- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="faname" value="<?php echo set_value('faname'); ?>" class="form-control" >
      <?php echo form_error('faname'); ?>
    </div>
    </div>

    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Maritial status<span style= "color: red"; >* </span> :-</label>
    </div>
     <div class="col-sm-8">
     <select name="maritial" id="maritial" value="<?php echo set_value('maritial'); ?>" onchange="marit();" class="form-control" >
      <option value="">Select Maritial</option>
        <option value="single">single</option>
        <option value="Married">Married</option>
        <option value="Married">widow</option>
        <option value="Married">widower</option>
        <option value="Married">Seperate</option>
     </select><?php echo form_error('maritial'); ?>
    </div>
    </div>
   
    <div class="mb-3 row"  id="spouse">
   <div class="col-sm-4">
      <label class="lable">Spouse Name :- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="sname" class="form-control" >
    </div>
    </div>

    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Religion <span style= "color: red"; >* </span>:-</label>
    </div>
     <div class="col-sm-8">
     <select name="Religion" value="<?php echo set_value('Religion'); ?>" class="form-control" >
      <option value="">Select Religion</option>
        <option value="Hindu">Hindu</option>
        <option value="Christian">Christian</option>
        <option value="Muslim">Muslim</option>
        <option value="Others">Others</option>
     </select><?php echo form_error('Religion'); ?>
    </div>
    </div>
   
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Community<span style= "color: red"; >* </span> :-</label>
    </div>
     <div class="col-sm-8">
     <select name="Community" value="<?php echo set_value('Religion'); ?>" class="form-control" >
      <option value="">Select your Community</option>
        <option value="OC/FC">OC/FC</option>
        <option value="BC">BC</option>
        <option value="MBC">MBC</option>
        <option value="SC/ST">SC/ST</option>
     </select><?php echo form_error('Religion'); ?>
    </div>
    </div>
   
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Differently abled person<span style= "color: red"; >* </span>:- </label>
    </div>
     <div class="col-sm-8">
     <select name="daperson" id="diffable" onchange="ifable();" value="<?php echo set_value('daperson'); ?>" class="form-control" >
      <option value="">Select differently</option>
        <option value="ableyes">yes</option>
        <option value="ableno">No</option>
     </select><?php echo form_error('daperson'); ?>
    </div>
    </div>
    <div class="mb-3 row" id="diffable1">
   <div class="col-sm-4" >
      <label class="lable"> If Yes Please Mention in Details :- </label>
    </div>
     <div class="col-sm-8">
     <textarea name="ifdetails"  class="form-control" ></textarea>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Mobile No<span style= "color: red"; >* </span>:- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="p_mobile" maxlength="10" value="<?php echo set_value('p_mobile'); ?>" class="form-control" >
      </select><?php echo form_error('p_mobile'); ?>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Email<span style= "color: red"; >* </span>:- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="p_email" value="<?php echo set_value('p_email'); ?>" class="form-control" >
      </select><?php echo form_error('p_email'); ?>
    </div>
</div>
</div>
</div>
</div>
</div>
<!--address-->
        
    

    <div class="card card-primary card-outline" style="padding: 50px; margin: 20px;">
    <div class="card-body">
          <h2 class="card-title">Address Details :-</h2><br><br>
   <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable"  for="primaryaddress">Present Address<span style= "color: red"; >* </span>:- </label>
    </div>
     <div class="col-sm-6">
     <textarea type="text" id="primaryaddress" name="paddress"  value="<?php echo set_value('paddress'); ?>" class="form-control" ></textarea>
     <?php echo form_error('paddress'); ?>
    </div>
    </div>

    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">State<span style= "color: red"; >* </span>:-</label>
    </div>
     <div class="col-sm-6">
     <select name="State" id="State"  value="<?php echo set_value('State'); ?>" class="form-control" >
      <option value="">Select State</option>
        <option value="Andhra-Pradesh">Andhra Pradesh</option>
        <option value="Arunachal-Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Goa">Goa</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal-Pradesh">Himachal Pradesh</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Madhya-Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil-Nadu">Tamil Nadu</option>
        <option value="Telangana">Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar-Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West-Bengal">West Bengal</option>
     </select><?php echo form_error('State'); ?>
    </div>
    </div>


    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">District<span style= "color: red"; >*</span>:-</label>
    </div>
     <div class="col-sm-6">
     <select name="District" id="primarydistrict"  value="<?php echo set_value('District'); ?>" class="form-control" >
      <option value="">Select District</option>
        <option value=" Ariyalur">Ariyalur</option>
        <option value="Chengalpattu ">Chengalpattu</option>
        <option value="Chennai ">Chennai</option>
        <option value=" Coimbatore">Coimbatore</option>
        <option value="Cuddalore ">Cuddalore</option>
        <option value=" Dharmapuri">Dharmapuri</option>
        <option value=" Dindigul">Dindigul</option>
        <option value=" Erode">Erode</option>
        <option value=" Kallakurichi">Kallakurichi</option>
        <option value="Kanchipuram ">Kanchipuram</option>
        <option value=" Kanyakumari">Kanyakumari</option>
        <option value="Karur ">Karur</option>
        <option value=" Krishnagiri">Krishnagiri</option>
        <option value="Madurai ">Madurai</option>
        <option value="Mayiladuthurai">Mayiladuthurai</option>
        <option value=" Nagapattinam">Nagapattinam</option>
        <option value="Namakkal ">Namakkal</option>
        <option value=" Nilgiris">Nilgiris</option>
        <option value="Perambalur ">Perambalur</option>
        <option value=" Pudukkottai">Pudukkottai</option>
        <option value="Ramanathapuram ">Ramanathapuram</option>
        <option value=" Ranipet">Ranipet</option>
        <option value=" Salem">Salem</option>
        <option value="Sivaganga ">Sivaganga</option>
        <option value=" Tenkasi">Tenkasi</option>
        <option value=" Thanjavur">Thanjavur</option>
        <option value="Theni ">Theni</option>
        <option value=" Thoothukudi">Thoothukudi</option>
        <option value=" Tiruchirappalli">Tiruchirappalli</option>
        <option value=" Tirunelveli">Tirunelveli</option>
        <option value=" Tirupattur">Tirupattur</option>
        <option value="Tiruppur ">Tiruppur</option>
        <option value=" Tiruvallur">Tiruvallur</option>
        <option value="Tiruvannamalai ">Tiruvannamalai</option>
        <option value="Tiruvarur ">Tiruvarur</option>
        <option value=" Vellore">Vellore</option>
        <option value=" Viluppuram">Viluppuram</option>
        <option value=" Virudhunagar">Virudhunagar</option>
     </select><?php echo form_error('District'); ?>
    </div>
    </div>
   
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable" for="primaryzip">Pincode<span style= "color: red"; >* </span>:- </label>
    </div>
     <div class="col-sm-6">
      <input type="text" id="primaryzip" name="Pincode" maxlength="6"  value="<?php echo set_value('Pincode'); ?>" class="form-control" >
      <?php echo form_error('Pincode'); ?>
    </div>
    </div>
    <div class="mb-3 row">
      <input type="checkbox" id="same" name="same" onchange="addressFunction()" />
	    <label for="same"> Same as permenent address </label>
    </div>
     

    <hr>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable"  for="secondaryaddress"> Permenent Address<span style= "color: red"; >* </span>:- </label>
    </div>
     <div class="col-sm-6">
     <textarea type="text" id="secondaryaddress" name="peaddress" value="<?php echo set_value('peaddress'); ?>" class="form-control" ></textarea>
     <?php echo form_error('peaddress'); ?>
    </div>
    </div>
   
   
   
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">State<span style= "color: red"; >* </span>:-</label>
    </div>
     <div class="col-sm-6">
     <select name="pestate" id="pestate" value="<?php echo set_value('pestate'); ?>" class="form-control" >
     <option value="">Select State</option>
     <option value="Andhra-Pradesh">Andhra Pradesh</option>
        <option value="Arunachal-Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Goa">Goa</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal-Pradesh">Himachal Pradesh</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Madhya-Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil-Nadu">Tamil Nadu</option>
        <option value="Telangana">Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar-Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West-Bengal">West Bengal</option>
     </select><?php echo form_error('pestate'); ?>
    </div>
    </div>
   
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">District<span style= "color: red"; >* </span>:-</label>
    </div>
     <div class="col-sm-6">
     <select name="pedistrict" id="secondarydistrict" value="<?php echo set_value('pedistrict'); ?>" class="form-control" >
     <option value="">Select District</option>
     <option value=" Ariyalur">Ariyalur</option>
        <option value="Chengalpattu ">Chengalpattu</option>
        <option value="Chennai ">Chennai</option>
        <option value=" Coimbatore">Coimbatore</option>
        <option value="Cuddalore ">Cuddalore</option>
        <option value=" Dharmapuri">Dharmapuri</option>
        <option value=" Dindigul">Dindigul</option>
        <option value=" Erode">Erode</option>
        <option value=" Kallakurichi">Kallakurichi</option>
        <option value="Kanchipuram ">Kanchipuram</option>
        <option value=" Kanyakumari">Kanyakumari</option>
        <option value="Karur ">Karur</option>
        <option value=" Krishnagiri">Krishnagiri</option>
        <option value="Madurai ">Madurai</option>
        <option value="Mayiladuthurai">Mayiladuthurai</option>
        <option value=" Nagapattinam">Nagapattinam</option>
        <option value="Namakkal ">Namakkal</option>
        <option value=" Nilgiris">Nilgiris</option>
        <option value="Perambalur ">Perambalur</option>
        <option value=" Pudukkottai">Pudukkottai</option>
        <option value="Ramanathapuram ">Ramanathapuram</option>
        <option value=" Ranipet">Ranipet</option>
        <option value=" Salem">Salem</option>
        <option value="Sivaganga ">Sivaganga</option>
        <option value=" Tenkasi">Tenkasi</option>
        <option value=" Thanjavur">Thanjavur</option>
        <option value="Theni ">Theni</option>
        <option value=" Thoothukudi">Thoothukudi</option>
        <option value=" Tiruchirappalli">Tiruchirappalli</option>
        <option value=" Tirunelveli">Tirunelveli</option>
        <option value=" Tirupattur">Tirupattur</option>
        <option value="Tiruppur ">Tiruppur</option>
        <option value=" Tiruvallur">Tiruvallur</option>
        <option value="Tiruvannamalai ">Tiruvannamalai</option>
        <option value="Tiruvarur ">Tiruvarur</option>
        <option value=" Vellore">Vellore</option>
        <option value=" Viluppuram">Viluppuram</option>
        <option value=" Virudhunagar">Virudhunagar</option>
     </select><?php echo form_error('pedistrict'); ?>
    </div>
    </div>
   
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable" for="secondaryzip">Pincode<span style= "color: red"; >* </span>:- </label>
    </div>
     <div class="col-sm-6">
      <input type="text" id="secondaryzip" name="pepincode" maxlength="6" value="<?php echo set_value('pepincode'); ?>" class="form-control" >
      <?php echo form_error('pepincode'); ?>
    </div>
    </div>
    <div class="mb-3 row">
      <input type="checkbox" id="kycsame" name="kycsame" onchange="Function()" />
	    <label for="kycsame"> Same as KYC address </label> 
    </div>
        
<hr>

    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable" for="kycaddress">KYC Address<span style= "color: red"; >* </span>:- </label>
    </div>
     <div class="col-sm-6">
     <textarea name="kaddress" id="kycaddress" value="<?php echo set_value('kaddress'); ?>" class="form-control" ></textarea>
     <?php echo form_error('kaddress'); ?>
    </div>
    </div>


    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">State<span style= "color: red"; >* </span>:-</label>
    </div>
     <div class="col-sm-6">
     <select name="kstate" value="<?php echo set_value('kstate'); ?>" class="form-control" >
      <option value="">Select State</option>
      <option value="Andhra-Pradesh">Andhra Pradesh</option>
        <option value="Arunachal-Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Goa">Goa</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal-Pradesh">Himachal Pradesh</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Madhya-Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil-Nadu">Tamil Nadu</option>
        <option value="Telangana">Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar-Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West-Bengal">West Bengal</option>
     </select><?php echo form_error('kstate'); ?>
    </div>
    </div>

    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">District<span style= "color: red"; >* </span>:-</label>
    </div>
     <div class="col-sm-6">
     <select name="kdistrict" id="kycdistrict" value="<?php echo set_value('kdistrict'); ?>" class="form-control" >
     <option value="">Select District</option>
     <option value=" Ariyalur">Ariyalur</option>
        <option value="Chengalpattu ">Chengalpattu</option>
        <option value="Chennai ">Chennai</option>
        <option value=" Coimbatore">Coimbatore</option>
        <option value="Cuddalore ">Cuddalore</option>
        <option value=" Dharmapuri">Dharmapuri</option>
        <option value=" Dindigul">Dindigul</option>
        <option value=" Erode">Erode</option>
        <option value=" Kallakurichi">Kallakurichi</option>
        <option value="Kanchipuram ">Kanchipuram</option>
        <option value=" Kanyakumari">Kanyakumari</option>
        <option value="Karur ">Karur</option>
        <option value=" Krishnagiri">Krishnagiri</option>
        <option value="Madurai ">Madurai</option>
        <option value="Mayiladuthurai">Mayiladuthurai</option>
        <option value=" Nagapattinam">Nagapattinam</option>
        <option value="Namakkal ">Namakkal</option>
        <option value=" Nilgiris">Nilgiris</option>
        <option value="Perambalur ">Perambalur</option>
        <option value=" Pudukkottai">Pudukkottai</option>
        <option value="Ramanathapuram ">Ramanathapuram</option>
        <option value=" Ranipet">Ranipet</option>
        <option value=" Salem">Salem</option>
        <option value="Sivaganga ">Sivaganga</option>
        <option value=" Tenkasi">Tenkasi</option>
        <option value=" Thanjavur">Thanjavur</option>
        <option value="Theni ">Theni</option>
        <option value=" Thoothukudi">Thoothukudi</option>
        <option value=" Tiruchirappalli">Tiruchirappalli</option>
        <option value=" Tirunelveli">Tirunelveli</option>
        <option value=" Tirupattur">Tirupattur</option>
        <option value="Tiruppur ">Tiruppur</option>
        <option value=" Tiruvallur">Tiruvallur</option>
        <option value="Tiruvannamalai ">Tiruvannamalai</option>
        <option value="Tiruvarur ">Tiruvarur</option>
        <option value=" Vellore">Vellore</option>
        <option value=" Viluppuram">Viluppuram</option>
        <option value=" Virudhunagar">Virudhunagar</option>
     </select><?php echo form_error('kdistrict'); ?>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable" for="kyczip">Pincode<span style= "color: red"; >* </span>:- </label>
    </div>
     <div class="col-sm-6">
      <input type="text" id="kyczip" name="kpincode" maxlength="6" value="<?php echo set_value('kpincode'); ?>" class="form-control" >
      <?php echo form_error('kpincode'); ?>
    </div>
    </div>

              </div>
            </div><!-- /.card -->
       

          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card card-primary card-outline" style="padding: 50px; margin: 20px;">
              <div class="card-header">
                <h5 class="card-title m-0">Emergency Contact :-</h5>
              </div>
              <br>
              <div class="card-body">
                <div class="form-group">
                <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable" for="emgname">Name<span style= "color: red"; >* </span>:- </label>
    </div>
     <div class="col-sm-6">
      <input type="text" name="emg_name" id="emgname" value="<?php echo set_value('emg_name'); ?>" class="form-control" >
      <?php echo form_error('emg_name'); ?>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable" for="emgrelation">Relationship<span style= "color: red"; >* </span>:- </label>
    </div>
     <div class="col-sm-6">
      <input type="text" name="emg_relationship" id="emgrelation" value="<?php echo set_value('emg_relationship'); ?>" class="form-control" >
      <?php echo form_error('emg_relationship'); ?>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable" for="emgcontact">Contact Number<span style= "color: red"; >* </span>:- </label>
    </div>
     <div class="col-sm-6">
      <input type="text" name="emg_con_number" maxlength="10" id="emgcontact" value="<?php echo set_value('emg_con_number'); ?>" class="form-control" >
      <?php echo form_error('emg_con_number'); ?>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable" for="emgaddress">Address<span style= "color: red"; >* </span>:- </label>
    </div>
     <div class="col-sm-6">
      <input type="text" name="emg_address" id="emgaddress" value="<?php echo set_value('emg_address'); ?>" class="form-control" >
      <?php echo form_error('emg_address'); ?>
    </div>
    </div>
    <div class="mb-3 row">
          <input type="checkbox" id="same_address_emg" name="same_address_emer" onchange="emgFunction()"/> 
          <label for="same">Same as Nominee Details </label>
       </div>
                    <hr>
                  
                       <h5 class="card-title m-0">Nominee Details</h5><br> <br>
                       <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable" for="noname">Nominee Name<span style= "color: red"; >* </span>:- </label>
    </div>
     <div class="col-sm-6">
      <input type="text" name="nomname" id="noname" value="<?php echo set_value('nomname'); ?>"  class="form-control" >
      <?php echo form_error('nomname'); ?>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable" for="norelation"> Nominee Relationship<span style= "color: red"; >* </span>:- </label>
    </div>
     <div class="col-sm-6">
      <input type="text" name="nom_relationship" id="norelation" value="<?php echo set_value('nom_relationship'); ?>" class="form-control" >
      <?php echo form_error('nom_relationship'); ?>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable" for="nocontact"> Contact Number<span style= "color: red"; >* </span>:- </label>
    </div>
     <div class="col-sm-6">
      <input type="text" name="nom_number" maxlength="10" id="nocontact" value="<?php echo set_value('nom_number'); ?>" class="form-control" >
      <?php echo form_error('nom_number'); ?>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable" for="noaddress">Nominee Address<span style= "color: red"; >* </span>:- </label>
    </div>
     <div class="col-sm-6">
      <input type="text" name="nom_address" id="noaddress" value="<?php echo set_value('nom_address'); ?>" class="form-control" >
      <?php echo form_error('nom_address'); ?>
    </div>
    </div>
</div>
</div>


                    <div class="card-body">
                      <h5 class="card-title">Any Blood Relation Working Here :-</h5><br>
                      <h5 class="card-title m-0">If  Yes, please mention the details below<span style= "color: red"; >* </span></h5><br>
                    <div class="form-group"><br>
                    <center><div class="col-sm-4">
                    <select name=" customRadio1" value="<?php echo set_value('customRadio1'); ?>" class="form-control" id="Type" onchange="Click();" >
                        <option value="">--Select--</option>
                        <option value="oppyes">Yes</option>
                        <option value="no">No</option>
                    </select><?php echo form_error('customRadio1'); ?>
              </div> </center>
                        <br>
    <div  class="mb-3 row" id=Operationyes>
   <div  class="col-sm-4">
      <label class="lable"> Name :- </label>
    </div>
     <div class="col-sm-6">
      <input type="text" name="blood_name" class="form-control" >
    </div>
    </div>
    <div  class="mb-3 row" id=Operationyes1>
   <div class="col-sm-4">
      <label  class="lable"> Employee ID :- </label>
    </div>
     <div class="col-sm-6">
      <input type="text" name="blood_emp_id" class="form-control" >
    </div>
    </div>
    <div id=Operationyes2  class="mb-3 row">
   <div class="col-sm-4">
      <label id=Operationyes class="lable">  Relationship :- </label>
    </div>
     <div class="col-sm-6">
      <input type="text" name="blood_relationship"  class="form-control" >
    </div>
    </div>
    <div id=Operationyes3  class="mb-3 row">
   <div class="col-sm-4">
      <label id=Operationyes class="lable"> Department :- </label>
    </div>
     <div class="col-sm-6">
      <input type="text" name="blood_department"  class="form-control" >
    </div>
    </div>

  <table style="width: 100%">
  <div class="col-sm-12">
  <tbody><tr>
  <th>NAME OF THE QUALIFICATION :-</th>
    <th style="padding: 15px;">BOARD/UNIVERSITY<span style= "color: red"; >* </span></th>
    <th style="padding: 15px;">% OF MARK<span style= "color: red"; >* </span></th>
    <th style="padding: 15px;">YEAR OF PASSING<span style= "color: red"; >* </span></th>
    <th style="padding: 15px;">BREAK IN EDUCATION<span style= "color: red"; >* </span></th>
  </tr>

      
  <tr>
  <td>SSLC<span style= "color: red"; >* </span></td>
    <td><input type="text" name="sslcname" value="<?php echo set_value('sslcname'); ?>" class="form-control" ><?php echo form_error('sslcname'); ?></td>
    <td><input type="text" name="sslcmark" value="<?php echo set_value('sslcmark'); ?>" class="form-control" ><?php echo form_error('sslcmark'); ?></td>
    <td><input type="text" name="sslcyop" value="<?php echo set_value('sslcyop'); ?>" class="form-control" ><?php echo form_error('sslcyop'); ?></td>
    <td><select name=" sslcbreak" value="<?php echo set_value('sslcbreak'); ?>" class="form-control" >
                        <option value="">--Select--</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select><?php echo form_error('sslcbreak'); ?></td>
  </tr>
 
  <tr>
    <td>HSC<span style= "color: red"; >* </span></td>
    <td><input type="text" name="hscname" value="<?php echo set_value('hscname'); ?>" class="form-control" ><?php echo form_error('hscname'); ?></td>
    <td><input type="text" name="hscmark" value="<?php echo set_value('hscmark'); ?>" class="form-control" ><?php echo form_error('hscmark'); ?></td>
    <td><input type="text" name="hscyop" value="<?php echo set_value('hscyop'); ?>" class="form-control" ><?php echo form_error('hscyop'); ?></td>
    <td><select name="hscbreak" value="<?php echo set_value('hscbreak'); ?>" class="form-control" >
                        <option value="">--Select--</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select><?php echo form_error('hscbreak'); ?></td>
  </tr>

  <tr>
 
    <td>DIPLOMA/UG DEGREE <input type="text" name="ug_degree" class="form-control" placeholder="Ex. B.sc"></td>
    <td><input type="text" name="ugname" class="form-control" ></td>
    <td><input type="text" name="ugmark" class="form-control" ></td>
    <td><input type="text" name="ugyop" class="form-control" ></td>
    <td><select name="ugbreak" class="form-control" >
                        <option value="">--Select--</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select></td>
  </tr>

  <tr>
  <td>PG DEGREE <input type="text" name="pg_degree" class="form-control" placeholder="Ex. M.sc"></td>
    <td><input type="text" name="pgname" class="form-control" ></td>
    <td><input type="text" name="pgmark" class="form-control" ></td>
    <td><input type="text" name="pgyop" class="form-control" ></td>
    <td><select name="pgbreak" class="form-control" >
                        <option value="">--Select--</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select> </td>
  </tr>
      
  <tr>
    <td>OTHERS <br>(additional certificate)</td>
    <td><input type="text" name="oths_name" class="form-control" ></td>
    <td><input type="text" name="oths_mark" class="form-control" ></td>
    <td><input type="text" name="oths_yop" class="form-control" ></td>
    <td><select name="oths_break" class="form-control" >
                        <option value="">--Select--</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select> </td>
                          
  </tr>
      
</tbody></table>
</div>
<section class="content">

                    
  <div class="mb-3 row">
   <div class="col-sm-6">
      <label class="lable"> working Experience<span style= "color: red"; >* </span>:- </label>
    </div>
     <div class="col-sm-4">
     <select name=" wrk_exp" id="works"  value="<?php echo set_value('wrk_exp'); ?>" class="form-control" onchange="work();" >
      <option value="">--Select--</option>
        <option value="expyes">Experience</option>
        <option value="Fresher" >Fresher</option>
     </select><?php echo form_error('wrk_exp'); ?>
    </div>
    </div>
   </div>
     </div>
     <div class="card card-primary card-outline" id="workexp" style="padding: 50px; margin: 20px;">
              <div class="card-header" >
                <h5 class="card-title m-0" >Work Details :-</h5>
              </div>
              <div class="card-body" >
              <h5 class="card-title" id="workexp">Experience in Sector :-</h5><br>
                <div class="form-group">
                
                      <center><div class="col-sm-4">
                        <select name="customRadio2"  class="form-control" >
                            <option value="" >--Select--</option>
                            <option value="Service">Service</option>
                            <option value="Education">Education</option>
                            <option value="Agriculture">Agriculture</option>
                            <option value="Finance Services">Finance Services</option>
                            <option value="Industrial">Industrial</option>
                            <option value="IT">IT</option>
                        </select>
                      </div></center>
                      <div class="mb-3 row">
                        <div class="custom-control custom-radio">
                          <label for="customRadio16"  id="workexp1" class="custom-control-text">Others :- <input type="text" name="customRadio2"  id="workexp1" class="form-control" ></label>
                        </div>
              </div></div>
              <h5 class="card-title" id=""> Field of Experiene :-</h5><br>
                <div class="form-group" >
                        <center><div class="col-sm-4" >
                        <select name="customRadio3" id="" class="form-control" >
                            <option value="">--Select--</option>
                            <option value="Business & collection">Business & collection</option>
                            <option value="Verification">Verification</option>
                            <option value="Legal">Legal</option>
                            <option value="Teaching">Teaching</option>
                            <option value="Finance">Finance</option>
                            <option value="sales & Marketing">sales & Marketing</option>
                            <option value="IT">IT</option>
                            <option value="Admin">Admin</option>
                            <option value="Accounts">Accounts</option>
                            <option value="Driving">Driving</option>
                            <option value="HR">HR</option>
                        </select>
                      </div></center>
           <div class="custom-control custom-radio" >  
            <label for="customRadio28" id="" class="custom-control-text">Others: <center><input type="text" name="customRadio3" id="" class="form-control" ></label></center>
       </div><hr>
       <!--Kindly write Down Your Experience In Last Employer-->
       
       <div class="form-style-9">
    <div class="personal-details">
        <div class="mb-3 row">
            <div class="col-sm-4">
                <label class="label" for="Company">Company Name:</label>
            </div>
            <div class="col-sm-8">
                <input type="text" id="Company" name="comp_name" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-4">
                <label class="label" for="Designation">Designation:</label>
            </div>
            <div class="col-sm-8">
                <input type="text" id="Designation" name="experience_designation" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-4">
                <label class="label" for="Reason">Reason for Leaving:</label>
            </div>
            <div class="col-sm-8">
                <textarea name="Reason_for_Leaving" id="Reason" class="form-control"></textarea>
            </div>
        </div>
        <div class="col-sm-10">
            <h5 class="card-title">Duration</h5><br><br>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-4">
                <label class="label" for="Fromdate">From Date:</label>
            </div>
            <div class="col-sm-8" required>
                <input type="date" name="from_date" id="Fromdate" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-4">
                <label class="label" for="Todate">To Date:</label>
            </div>
            <div class="col-sm-8" required>
                <input type="date" name="to_date" id="Todate" class="form-control">
            </div>
        </div>
        <button type="button" class="remove-row btn-danger">- Remove</button>
    </div>
    <button type="button" class="add-row btn-primary">+ Add</button>
    </div>
</div>


<!--Company Details-1-->
<!--<section class="content">
<div class="container-fluid">
  <div class="row">
    <div class="col-12">-->
      <!-- Default box -->
      <!--<div class="card">
        <div class="card-header">
          <h3 class="card-title">Add Company Details</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable"> Company Name :- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="add_comp_name1"  class="form-control" >
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable"> Designation :- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="add_experience_designation1"  class="form-control" >
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable"> Reason for reliving :- </label>
    </div>
     <div class="col-sm-8">
      <textarea name="add_Reason_for_Leaving1" class="form-control" ></textarea>
    </div>
    </div>

<div class="col-sm-10">
<h5 class="card-title">Duration</h5><br><br></div>
                  
  <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable"> From Date :- </label>
    </div>
     <div class="col-sm-8" required>
      <input type="date" name="add_from_date1" id="dob" class="form-control">
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable"> To Date:- </label>
    </div>
     <div class="col-sm-8" required>
      <input type="date" name="add_to_date1" id="dob" class="form-control">
    </div>
    </div>
        </div>-->
        <!-- /.card-body -->
        <!--<div class="card-footer">
        </div>
</div>-->
        <!-- /.card-footer-->
      <!--</div>-->
      <!-- /.card -->
    <!--</div>
  </div>
</div>

</section>-->
<!-- /.content -->


<!--Company Details-2-->

<!--<section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-10">-->
            <!-- Default box -->
         <!--   <div class="card">
              <div class="card-header">
                <h3 class="card-title">Add Company Details</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable"> Company Name :- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="add_comp_name2"  class="form-control" >
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable"> Designation :- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="add_experience_designation2"  class="form-control" >
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable"> Reason for reliving :- </label>
    </div>
     <div class="col-sm-8">
      <textarea name="add_Reason_for_Leaving2" class="form-control" ></textarea>
    </div>
    </div>

<div class="col-sm-10">
<h5 class="card-title">Duration</h5><br><br>
</div>
                  
  <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable"> From Date :- </label>
    </div>
     <div class="col-sm-8" required>
      <input type="date" name="add_from_date2" id="dob" class="form-control">
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable"> To Date:- </label>
    </div>
     <div class="col-sm-8" required>
      <input type="date" name="add_to_date2" id="dob" class="form-control">
    </div>
    </div>
              </div>-->
              <!-- /.card-body -->
              <!--<div class="card-footer">
                
              </div>-->
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
  
    </section>
    <!-- /.content -->
  </div>

  
<!--Company Details-2-->
 <!-- /.input group -->
     
<!-- /.input group -->
                  <div class="card card-primary card-outline" style="padding: 50px; margin: 20px;">
              <div class="card-body">

              <table style="width:100%">
     <div class="col-sm-10">
      <label class="lable"> Family Details :- </label>
    </div>
  <tbody><tr>
    <th style="padding: 15px;">Name<span style= "color: red"; >* </span></th>
    <th style="padding: 15px;">Relationship<span style= "color: red"; >* </span></th>
    <th style="padding: 15px;">Occupation<span style= "color: red"; >* </span></th>
    <th style="padding: 15px;">Contact No<span style= "color: red"; >* </span></th>
  </tr>

      
  <tr>
    <td><input type="text" name="fam_name1"  value="<?php echo set_value('fam_name1'); ?>" class="form-control" ><?php echo form_error('fam_name1'); ?></td>
    <td><input type="text" name="fam_relationship1" value="<?php echo set_value('fam_relationship1'); ?>" class="form-control" ><?php echo form_error('fam_relationship1'); ?></td>
    <td><input type="text" name="fam_occupation1" value="<?php echo set_value('fam_occupation1'); ?>" class="form-control" ><?php echo form_error('fam_occupation1'); ?></td>
    <td><input type="text" name="fam_contact1" maxlength="10" value="<?php echo set_value('fam_contact1'); ?>"  class="form-control" ><?php echo form_error('fam_contact1'); ?></td>
  </tr>
      
  <tr>
    <td><input type="text" name="fam_name2" class="form-control" ></td>
    <td><input type="text" name="fam_relationship2" class="form-control" ></td>
    <td><input type="text" name="fam_occupation2" class="form-control" ></td>
    <td><input type="text" name="fam_contact2" maxlength="10" class="form-control" ></td>
  </tr>

  <tr>
    <td><input type="text" name="fam_name3" class="form-control" ></td>
    <td><input type="text" name="fam_relationship3" class="form-control" ></td>
    <td><input type="text" name="fam_occupation3" class="form-control" ></td>
    <td><input type="text" name="fam_contact3" maxlength="10" class="form-control" ><td>
  </tr>
      
  <tr>
    <td><input type="text" name="fam_name4" class="form-control" ></td>
    <td><input type="text" name="fam_relationship4" class="form-control" ></td>
    <td><input type="text" name="fam_occupation4" class="form-control" ></td>
    <td><input type="text" name="fam_contact4" maxlength="10" class="form-control" ></td>
  </tr>
      
  <tr>
    
    <td><input type="text" name="fam_name5" class="form-control" ></td>
    <td><input type="text" name="fam_relationship5" class="form-control" ></td>
    <td><input type="text" name="fam_occupation5" class="form-control" ></td>
    <td><input type="text" name="fam_contact5" maxlength="10" class="form-control" ></td>
  </tr>
      
</tbody></table>
<br>
                <h5 class="card-title">KYC Details :-</h5>

                <table style="width:100%">
                  <div class="col-sm-8">
            
</div>
                  </div>
  <tbody><tr>
  
    <th style="padding: 15px;">KYC Document Type</th>
    <th style="padding: 15px;">Name As On Document</th>
    <th style="padding: 15px;">Document Number</th>
    
  </tr>

      
  <tr>
  <td>Aadhaar<span style= "color: red"; >* </span>:-</td>
    <td><input type="text" name="aadhar_docname" value="<?php echo set_value('aadhar_docname'); ?>" class="form-control" > <?php echo form_error('aadhar_docname'); ?></td>
    <td><input type="text" name="aadhar_docnum" value="<?php echo set_value('aadhar_docnum'); ?>" class="form-control" ><?php echo form_error('aadhar_docnum'); ?></td>
    
    
  </tr>
      
  <tr>
  <td>PAN:-</td>
    <td><input type="text" name="pan_doc_name" class="form-control" ></td>
    <td><input type="text" name="pan_doc_num" class="form-control" ></td>
  </tr>
  <div class="col-sm-4">
  <tr>
  <div class="lable">
  <td>Bank Pass Book<span style= "color: red"; >* </span>:-</td>
    <td><input type="text" name="bank_book_name" value="<?php echo set_value('bank_book_name'); ?>" class="form-control" > <?php echo form_error('bank_book_name'); ?></td>
    <td><input type="text" name="bank_book_num" value="<?php echo set_value('bank_book_num'); ?>" class="form-control" ><?php echo form_error('bank_book_num'); ?> </td>
</div>
  </tr>
  <tr>
      <div class="col-sm-4">  
       <td>IFSC<span style= "color: red"; >* </span>:-</td>
      <div class="col-sm-4" required>
      <td><input type="number" name="ifsc_num" class="form-control" disabled></td>
      <td><input type="text" name="ifsc1_num" value="<?php echo set_value('ifsc1_num'); ?>" class="form-control" ><?php echo form_error('ifsc1_num'); ?></td>
    </div>
  </tr>

  </div>
  <tr>
  <td>Driving Licence :-</td>
    <td><input type="text" name="drivling_doc_name" class="form-control" ></td>
    <td><input type="text" name="drivling_doc_num" class="form-control" ></td>
  </tr>
      
  <tr>
  <td>Smart Card :-</td>
    <td><input type="text" name="smart_doc_name" class="form-control" ></td>
    <td><input type="text" name="smart_doc_num" class="form-control" ></td>
  </tr>
</tbody></table>
              </div>
              <div class="col-sm-10">
            <h5 class="card-title"><b>Personal Details </b></h5><br><br>
            <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Hobbies<span style= "color: red"; >* </span>:- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="Hobbies" value="<?php echo set_value('Hobbies'); ?>" class="form-control" ><?php echo form_error('Hobbies'); ?>
    </div>
    </div>

    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Strength<span style= "color: red"; >* </span>:- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="Strength" value="<?php echo set_value('Strength'); ?>" class="form-control" ><?php echo form_error('Strength'); ?>
    </div>
    </div>

    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Weakness<span style= "color: red"; >* </span>:-</label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="Weakness"  class="form-control" required>
    </div>
    </div>

    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable"> Achivements / Award :-</label>
    </div><br>
     <div class="col-sm-8">
     <p>1.</p>
    <input type="text" name="Achivements" class="form-control" >
    <p>2.</p>
    <input type="text" name="Award" class="form-control" >
    </div>
    </div>
                    <br>
                        <div class="card-body">
                            <h5 class="card-title">Drinking Habbit<span style= "color: red"; >* </span>:- </h5><br>
                        <div class="form-group">
                        <center><div class="col-sm-4">
                    <select name=" customRadio4"value="<?php echo set_value('customRadio4'); ?>" class="form-control" required>
                        <option value="">--Select--</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select> <?php echo form_error('customRadio4'); ?>
                  </div> </center>
                        <br>
                            <h5 class="card-title">Smoking Habbit<span style= "color: red"; >* </span>:-</h5><br>
                        <div class="form-group">
                        <center><div class="col-sm-4">
                    <select name=" customRadio5" value="<?php echo set_value('customRadio5'); ?>" class="form-control" required>
                        <option value="">--Select--</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select> <?php echo form_error('customRadio5'); ?>
                  </div> </center>
                           <br>
    <h5 class="card-title">Refernce</h5><br><br>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Name<span style= "color: red"; >* </span>:- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="ref_name" value="<?php echo set_value('ref_name'); ?>" class="form-control" required>
      <?php echo form_error('ref_name'); ?>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Designation<span style= "color: red"; >* </span>:-</label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="ref_designation" value="<?php echo set_value('ref_designation'); ?>" class="form-control" required>
      <?php echo form_error('ref_designation'); ?>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Organization Name<span style= "color: red"; >* </span>:-</label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="ref_Organization_name" value="<?php echo set_value('ref_Organization_name'); ?>" class="form-control" required>
      <?php echo form_error('ref_Organization_name'); ?>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Contact Number<span style= "color: red"; >* </span>:-</label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="ref_con_um" maxlength="10" value="<?php echo set_value('ref_con_um'); ?>" class="form-control" required>
      <?php echo form_error('ref_con_um'); ?>
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Email ID<span style= "color: red"; >* </span>:-</label>
    </div>
     <div class="col-sm-8">
      <input type="Email" name="ref_email_id" value="<?php echo set_value('ref_email_id'); ?>" class="form-control" required>
      <?php echo form_error('ref_email_id'); ?>
    </div>


    <section class="content">
<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Add Reference Details</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Name<span style= "color: red"; > </span>:- </label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="ref_name1"  class="form-control" >
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Designation<span style= "color: red"; > </span>:-</label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="ref_designation1"  class="form-control" >
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Organization Name<span style= "color: red"; > </span>:-</label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="ref_Organization_name1"  class="form-control" >
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Contact Number<span style= "color: red"; > </span>:-</label>
    </div>
     <div class="col-sm-8">
      <input type="text" name="ref_con_um1" maxlength="10"  class="form-control" >
    </div>
    </div>
    <div class="mb-3 row">
   <div class="col-sm-4">
      <label class="lable">Email ID<span style= "color: red"; ></span>:-</label>
    </div>
     <div class="col-sm-8">
      <input type="Email" name="ref_email_id1"  class="form-control" >
    </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        </div>
</div>

        <!-- /.card-footer-->
</div>   


<div class="row">
    <div class="col-sm-12">
        <div class="form-group" style="float: left;">
            <label class="lable"> Signature:- </label>
            <div style="border: 1px solid black; height: 150px; width: 150px; background: #F5FAFF;">
                <img id="out" width="150" height="150" style="display:none">
            </div>

            <input type="file" name="simage" id="simage" onchange="loadImage(event)" value="<?php echo set_value('simage'); ?>" class="form-control" accept="image/*" required>
            <?php echo form_error('simage'); ?>
        </div>
    </div>
</div>



<div class="mb-3 row">
     <div class="col-sm-2">
      <label class="lable">Declaration<span style= "color: red"; >* </span></label>
    </div>
    <div class="col-sm-15">
      <div style="justify-content: auto; text-align: justify; width: 250px;  
height: 0px;   "><div id="msg-price"> </div></div>
      
      <div style="border: 2px solid black; padding:10px; text-align: justify;border-radius: 10px;  ">
        <input type="checkbox" name="declare" >
        I hereby declare that the above particulars of  facts and information stated or true,correct and complete to the best of my belief and knowledge.
    </div>

  </div>  
    </div>
  </div>
    </div>
</div> 

            <div class="container" style="text-align: center; display: flex; padding: 30px; margin: 20px; justify-content: center;">
                <div class="btn btn-submit" >              
                  <button style= "position: absolute;" type="submit" value="submit" class="btn btn-primary" >Submit</button>
                </div>
            </div>

          </div>

              </form>
                   </div>               
                </div>  
              </div>
            </div>
        </div>
     </div>
             </div>
          <!-- /.col-md-6 -->
       
        <!-- /.row -->
    
    <!-- /.content -->
  
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

<!-- jQuery -->
<script src="<?=base_url();?>assets/vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url();?>assets/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!--<script src="assets/js/demo.js"></script>-->
<script>
function myFunction() {
  alert("Successfully submited");
}


function addressFunction() {
		if (document.getElementById(
		"same").checked) {
			document.getElementById(
			"secondaryaddress").value =
			document.getElementById(
			"primaryaddress").value;
			
			document.getElementById(
			"secondaryzip").value =
			document.getElementById(
			"primaryzip").value;
		} else {
			document.getElementById(
			"secondaryaddress").value = "";
			document.getElementById(
			"secondaryzip").value = "";
		}
	}

  function Function() {
		if (document.getElementById(
		"kycsame").checked) {
			document.getElementById(
			"kycaddress").value =
			document.getElementById(
			"secondaryaddress").value;
			
			document.getElementById(
			"kyczip").value =
			document.getElementById(
			"secondaryzip").value;
      } else {
      document.getElementById(
			"secondaryaddress").value = "";
			document.getElementById(
			"secondaryzip").value = "";
      }
    }

    function check() {
            var dropdown = document.getElementById("OperationType");
            var current_value = dropdown.options[dropdown.selectedIndex].value;

            if (current_value == "OpNo") {
             document.getElementById("OperationNos").style.display = "block";
            }
          else {
            document.getElementById("OperationNos").style.display = "none";
          }
        }


  function Click() {
    var dropdown = document.getElementById("Type");
    var current_value = dropdown.options[dropdown.selectedIndex].value;

    if (current_value == "oppyes") {
        document.getElementById("Operationyes").style.display = "block";
        document.getElementById("Operationyes1").style.display = "block";
        document.getElementById("Operationyes2").style.display = "block";
        document.getElementById("Operationyes3").style.display = "block";
    }
    else {
        document.getElementById("Operationyes").style.display = "none";
        document.getElementById("Operationyes1").style.display = "none";
        document.getElementById("Operationyes2").style.display = "none";
        document.getElementById("Operationyes3").style.display = "none";
    }
}

function work() {
    var dropdown = document.getElementById("works");
    var current_value = dropdown.options[dropdown.selectedIndex].value;

    if (current_value == "expyes") {
        document.getElementById("workexp").style.display = "block";
        document.getElementById("workexp1").style.display = "block";
    }
    else {
        document.getElementById("workexp").style.display = "none";
        document.getElementById("workexp1").style.display = "none";
    }
}

function emgFunction() {
  if (document.getElementById(
		"same_address_emg").checked) {

      document.getElementById(
			"noname").value =
			document.getElementById(
			"emgname").value;
     
      document.getElementById(
			"norelation").value =
			document.getElementById(
			"emgrelation").value;

      document.getElementById(
			"nocontact").value =
			document.getElementById(
			"emgcontact").value;

      document.getElementById(
			"noaddress").value =
			document.getElementById(
			"emgaddress").value;




    }else {
      document.getElementById(
			"noname").value = "";

      document.getElementById(
			"norelation").value = "";

      document.getElementById(
			"nocontact").value = "";

      document.getElementById(
			"noaddress").value = "";
      }
  
}

function ifable() {
    var dropdown = document.getElementById("diffable");
    var current_value = dropdown.options[dropdown.selectedIndex].value;

    if (current_value == "ableyes") {
        document.getElementById("diffable1").style.display = "block";
        document.getElementById("diffable1").style.display = "block";
    }
    else {
        document.getElementById("diffable1").style.display = "none";
        document.getElementById("diffable1").style.display = "none";
    }
}

function marit() {
    var dropdown = document.getElementById("maritial");
    var current_value = dropdown.options[dropdown.selectedIndex].value;

    if (current_value == "Married") {
        document.getElementById("spouse").style.display = "block";
        document.getElementById("spouse").style.display = "block";
    }
    else {
        document.getElementById("spouse").style.display = "none";
        document.getElementById("spouse").style.display = "none";
    }
}
</script>

<!--image upload-->
<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    }; 

  $('#output').show();
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
<!--image upload-->
<!--image sign-->
<script>
    function loadImage(event) {
        var fileInput = event.target;
        var imageOutput = document.getElementById('out');
        
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                imageOutput.style.display = 'block';
                imageOutput.src = e.target.result;
            };
            reader.readAsDataURL(fileInput.files[0]);
        } else {
            imageOutput.style.display = 'none';
            imageOutput.src = '';
        }
    }
</script>
<!--image sign-->
<script>
document.addEventListener("DOMContentLoaded", function () {
    const addButton = document.querySelector(".add-row");
   
    function addNewRow() {
        const personalDetails = document.querySelector(".personal-details");
        const clonedRow = personalDetails.cloneNode(true);

        // Clear the input values in the cloned row
        const inputs = clonedRow.querySelectorAll("input[type='text'], textarea");
        inputs.forEach((input) => (input.value = ''));

        // Insert the cloned row after the last row
        personalDetails.parentNode.insertBefore(clonedRow, addButton);
    }
   
    addButton.addEventListener("click", function () {
        addNewRow();
    });
    // Click event for removing a row
    document.addEventListener("click", function (event) {
        if (event.target.classList.contains("remove-row")) {
            const rowToRemove = event.target.parentNode;
            rowToRemove.parentNode.removeChild(rowToRemove);
        }
    });
});
</script>
<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    }; 

  $('#output').show();
    reader.readAsDataURL(event.target.files[0]);
  };
</script>

<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    }; 

  $('#output').show();
    reader.readAsDataURL(event.target.files[0]);
  };
</script>

<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    }; 

  $('#output').show();
    reader.readAsDataURL(event.target.files[0]);
  };
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script>
<!--image upload-->
</body>
</html>
