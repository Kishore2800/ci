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
  <link rel="stylesheet" href="<?=base_url();?>assets/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/css/buttons.bootstrap4.min.css">
  <style>
    /* Style for the image container */
    .image-container {
        max-width: 200px; /* Set the maximum width of the container */
    }

    /* Style for the image */
    .image-container img {
        width: 100%; /* Make the image occupy the full width of the container */
        height: auto; /* Maintain the aspect ratio of the image */
        display: block; /* Remove any extra space below the image */
    }

    /* Optional style for the link (if you want to change the link appearance) */
    .image-container a {
        text-decoration: none; /* Remove underline from the link */
        color: #000; /* Set the link color */
    }
</style>
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
              <li class="breadcrumb-item"><a href="<?=base_url('Admin/admin_form');?>">Interviewer Form</a></li>
              <li class="breadcrumb-item active">Form</li>
            </ol>
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?=base_url('admin/candidate_list');?>">Home</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="card">
              <div class="card-header">
                <h3 class="card-title"><u>Persional Details</u></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="<?php echo base_url('Admin/displaydata' . $users->userid)?>" method="POST">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                   
                    <tr>
                        <th>S.No</th>
                        <th>#User id</th>
                        <th>You Know?</th>
                        <th>Referenced-Name</th>
                        <th>Applicant image</th>
                        <th>Resume</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Father Name</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><?=$users->id; ?></td>
                    <td><?=$users->userid?></td>
                    <td><?=$users->howdoyou?></td>
                    <td><?=$users->emp_ref?></td>
                     <td>
                        <div class="image-container">
                          <a href="<?php echo base_url($users->img); ?>" download>
                              <img src="<?php echo base_url($users->img)?>" alt="Applicant signature" />
                          </a>
                        </div>
                      </td>
                    <td><a href="<?php echo base_url($users->resume); ?>" target="_blank">Download Resume</a></td>
                    <td><?=$users->name?></td>
                    <td><?=$users->lname?></td>
                    <td><?=$users->age?></td>
                    <td><?=$users->dob?></td>
                    <td><?=$users->gender?></td>
                    <td><?=$users->faname?></td>
                    <td>
                      <a href="<?= base_url('PDF/download/' . $users->id) ?>" class="btn btn-primary">Download PDF</a>
                    </td>
                        </tr>   
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
    <div class="card">
              <div class="card-header">
                <h3 class="card-title"><u>Personal Details</u></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                            <th>Religion</th>
                            <th>Spouse Name</th>
                            <th>Maritial status</th>
                            <th>Community</th>
                            <th>Diff abled person</th>
                            <th>if yes Details</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td><?=$users->Religion?></td>
                        <td><?=$users->sname?></td>
                        <td><?=$users->maritial?></td>
                        <td><?=$users->Community?></td>
                        <td><?=$users->daperson?></td>
                        <td><?=$users->ifdetails?></td>
                        <td><?=$users->p_mobile?></td>
                        <td><?=$users->p_email?></td>
                        </tr>    
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

<!-- /.card 2-->


<div class="card">
              <div class="card-header">
                <h3 class="card-title"><u>Address Details</u></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                            <th>Present Address</th>
                            <th>District</th>
                            <th>State</th>
                            <th>Pincode</th>
                            <th>Permenent Address</th>
                            <th>District</th>
                            <th>State</th>
                            <th>Pincode</th>
                            <th>KYC Address</th>
                            <th>District</th>
                            <th>State</th>
                            <th>Pincode</th>
                            
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            <td><?=$users->paddress?></td>
                            <td><?=$users->District?></td>
                            <td><?=$users->State?></td>
                            <td><?=$users->Pincode?></td>
                            <td><?=$users->peaddress?></td>
                            <td><?=$users->pedistrict?></td>
                            <td><?=$users->pestate?></td>
                            <td><?=$users->pepincode?></td>
                            <td><?=$users->kaddress?></td>
                            <td><?=$users->kdistrict?></td>
                            <td><?=$users->kstate?></td>
                            <td><?=$users->kpincode?></td>
                          
                        </tr>    
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>


<!-- /.card 3-->




<div class="card">
              <div class="card-header">
                <h3 class="card-title"><u>Emergency and Nominee Details</u></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                            <th>Emergency Name</th>
                            <th>Emergency Relation</th>
                            <th>Emergency mobile</th>
                            <th>Emergency Address</th>
                            <th>Nominee Name</th>
                            <th>Nominee Relation</th>
                            <th>Nominee mobile</th>
                            <th>Nominee Address</th>
                            <th>Any Blood Relation</th>
                            <th>b_Reltion Name</th>
                            <th>Employee ID</th>
                            <th>Relationship </th>
                            <th>Department </th>
                            
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            <td><?=$users->emg_name?></td>
                            <td><?=$users->emg_relationship?></td>
                            <td><?=$users->emg_con_number?></td>
                            <td><?=$users->emg_address?></td>
                            <td><?=$users->nomname?></td>
                            <td><?=$users->nom_relationship?></td>
                            <td><?=$users->nom_number?></td>
                            <td><?=$users->nom_address?></td>
                            <td><?=$users->customRadio1?></td>
                            <td><?=$users->blood_name?></td>
                            <td><?=$users->blood_emp_id?></td>
                            <td><?=$users->blood_relationship?></td>
                            <td><?=$users->blood_department?></td>
                           
                        </tr>    
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

<!-- /.card 4-->

<div class="card">
              <div class="card-header">
                <h3 class="card-title"><u>Education Details</u></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                            <th>Board/University<br>(SSLC)</th>
                            <th>% of Mark<br>(SSLC)</th>
                            <th>Year of Passing<br>(SSLC)</th>
                            <th>Break edu<br>(SSLC)</th>
                            <th>Name of Qualification<br>(HSC)</th>
                            <th>% of Mark<br>(HSC)</th>
                            <th>Year of Passing<br>(HSC)</th>
                            <th>Break edu<br>(HSC)</th>
                            <th>Ug Degree<br>B.Sc/BCA</th>
                            <th>Board/University<br>(Ug Degree)</th>
                            <th>% of Mark<br>(Ug Degree)</th>
                            <th>Year of Passing<br>(Ug Degree)</th>
                            <th>Break edu<br>(Ug Degree)</th>
                            <th>Pg Degree<br>M.sc/MCA</th>
                            <th>Board/University<br>(Pg Degree)</th>
                            <th>% of Mark<br>(Pg Degree)</th>
                            <th>Year of Passing<br>(Pg Degree)</th>
                            <th>Break edu<br>(Pg Degree)</th>
                            
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            <td><?=$users->sslcname?></td>
                            <td><?=$users->sslcmark?></td>
                            <td><?=$users->sslcyop?></td>
                            <td><?=$users->sslcbreak?></td>
                            <td><?=$users->hscname?> </td>
                            <td><?=$users->hscmark?></td>
                            <td><?=$users->hscyop?></td>
                            <td><?=$users->hscbreak?></td>
                            <td><?=$users->ug_degree?></td>
                            <td><?=$users->ugname?></td>
                            <td><?=$users->ugmark?></td>
                            <td><?=$users->ugyop?></td>
                            <td><?=$users->ugbreak?></td>
                            <td><?=$users->pg_degree?></td>
                            <td><?=$users->pgname?></td>
                            <td><?=$users->pgmark?></td>
                            <td><?=$users->pgyop?></td>
                            <td><?=$users->pgbreak?></td>
                            
                        </tr>    
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

<!-- /.card 5-->

<div class="card">
              <div class="card-header">
                <h3 class="card-title"><u>Others Edu and Experience Details</u></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                            <th>Name of Qualification<br>(Others)</th>
                            <th>% of Mark<br>(Others)</th>
                            <th>Year of Passing<br>(Others)</th>
                            <th>Break Edu<br>(Others)</th>
                            <th>Working Experience</th>
                            <th>Exp in Sector</th>
                            <th>EXP_Sector<br>(Others)</th>
                            <th>Field of Experience</th>
                            <th>Field_EXP<br>(Others)</th>
                            
                           
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            <td><?=$users->oths_name?></td>
                            <td><?=$users->oths_mark?></td>
                            <td><?=$users->oths_yop?></td>
                            <td><?=$users->oths_break?></td>
                            <td><?=$users->wrk_exp?></td>
                            <td><?=$users->customRadio2?></td>
                            <td><?=$users->customRadio3?></td>
                            <td><?=$users->comp_name?></td>
                            <td><?=$users->experience_designation?></td>
                            
                        </tr>    
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

<!-- /.card 6-->



<div class="card">
              <div class="card-header">
                <h3 class="card-title"><u>Company Experience Details</u></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                          <th>Experience In Last Employer<br>(company Name)</th>
                            <th>Designation</th>
                            <th>Reason for reliving</th>
                            <th>Duration From Date</th>
                            <th>Duration To Date</th>
                            <th>Experience In Last Employer<br>(company Name)</th>
                            <th>Designation</th>
                            <th>Reason for reliving</th>
                            <th>Duration From Date</th>
                            <th>Duration To Date</th>
                            <th>Experience In Last Employer<br>(company Name)</th>
                            <th>Designation</th>
                            <th>Reason for reliving</th>
                            <th>Duration From Date</th>
                            <th>Duration To Date</th>
                            
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            <td><?=$users->comp_name?></td>
                            <td><?=$users->experience_designation?></td>
                            <td><?=$users->Reason_for_Leaving?></td>
                            <td><?=$users->from_date?></td>
                            <td><?=$users->to_date?></td>
                            <td><?=$users->add_comp_name1?></td>
                            <td><?=$users->add_experience_designation1?></td>
                            <td><?=$users->add_Reason_for_Leaving1?></td>
                            <td><?=$users->add_from_date1?></td>
                            <td><?=$users->add_to_date1?></td>
                            <td><?=$users->add_comp_name2?></td>
                            <td><?=$users->add_experience_designation2?></td>
                            <td><?=$users->add_Reason_for_Leaving2?></td>
                            <td><?=$users->add_from_date2?></td>
                            <td><?=$users->add_to_date2?></td>
                            
                        </tr>    
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

<!-- /.card 7-->

<div class="card">
              <div class="card-header">
                <h3 class="card-title"><u>Family Details</u></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                            <th>Family Details<br>Name</th>
                            <th>Family<br>Relationship</th>
                            <th>Family<br>Occupation</th>
                            <th>Family<br>Contact</th>
                            <th>Family Details<br>Name</th>
                            <th>Family<br>Relationship</th>
                            <th>Family<br>Occupation</th>
                            <th>Family<br>Contact</th>
                            <th>Family Details<br>Name</th>
                            <th>Family<br>Relationship</th>
                            <th>Family<br>Occupation</th>
                            <th>Family<br>Contact</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            <td><?=$users->fam_name1?></td>
                            <td><?=$users->fam_relationship1?></td>
                            <td><?=$users->fam_occupation1?></td>
                            <td><?=$users->fam_contact1?></td>
                            <td><?=$users->fam_name2?></td>
                            <td><?=$users->fam_relationship2?></td>
                            <td><?=$users->fam_occupation2?></td>
                            <td><?=$users->fam_contact2?></td>
                            <td><?=$users->fam_name3?>Kavi</td>
                            <td><?=$users->fam_relationship3?></td>
                            <td><?=$users->fam_occupation3?></td>
                            <td><?=$users->fam_contact3?></td>
                        </tr>    
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

<!-- /.card 8-->

<div class="card">
              <div class="card-header">
                <h3 class="card-title"><u>Verification Details</u></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                            
                            <th>KYC Details<br>Aadhar Name</th>
                            <th>Aadhar<br>Number</th>
                            <th>PAN<br>Name</th>
                            <th>PAN<br>Number</th>
                            <th>Bank PassBook<br>Name</th>
                            <th>Bank PassBook<br>Number</th>
                            <th>Bank PassBook<br>IFSC</th>
                            <th>Driving Licence<br>Name</th>
                            <th>Driving Licence<br>Number</th>
                            <th>Smart Card<br>Name</th>
                            <th>Smart Card<br>Number</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                   
                            <td><?=$users->aadhar_docname?></td>
                            <td><?=$users->aadhar_docnum?></td>
                            <td><?=$users->pan_doc_name?></td>
                            <td><?=$users->pan_doc_num?></td>
                            <td><?=$users->bank_book_name?></td>
                            <td><?=$users->bank_book_num?></td>
                            <td><?=$users->ifsc1_num?></td>
                            <td><?=$users->drivling_doc_name?></td>
                            <td><?=$users->drivling_doc_num?></td>
                            <td><?=$users->smart_doc_name?></td>
                            <td><?=$users->smart_doc_num?></td>
                        </tr>    
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

<!-- /.card 9-->

<div class="card">
              <div class="card-header">
                <h3 class="card-title"><u>Achivements Details</u></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                           
                            <th>Personal Details :<br>Hobbies</th>
                            <th>Strength </th>
                            <th>Weakness</th>
                            <th>Achivements/Award<br>1.</th>
                            <th>Achivements/Award<br>2.</th>
                            <th>Drinking Habbit</th>
                            <th>Smoking Habbit</th>
                            
                            
                            
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            
                            <td><?=$users->Hobbies?></td>
                            <td><?=$users->Strength?></td>
                            <td><?=$users->Weakness?></td>
                            <td><?=$users->Achivements?></td>
                            <td><?=$users->Award?></td>
                            <td><?=$users->customRadio4?></td>
                            <td><?=$users->customRadio5?>  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

<!-- /.card 10-->

<div class="card">
              <div class="card-header">
                <h3 class="card-title"><u>Refernce Details</u></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                            <th>Refernce:<br>Name</th>
                            <th>Designation</th>
                            <th>Organization Name </th>
                            <th>Contact Number</th>
                            <th>Email ID</th>
                            <th>Signature</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            <td><?=$users->ref_name?></td>
                            <td><?=$users->ref_designation?></td>
                            <td><?=$users->ref_Organization_name?></td>
                            <td><?=$users->ref_con_um?></td>
                            <td><?=$users->ref_email_id?></td>
                            <td>
                                <div class="image-container">
                                <?php
                                  if (isset($users->simage) && !empty($users->simage)) {
                                    $imageUrl = base_url(ltrim($users->simage));
                                ?>
                                  <a href="<?php echo $imageUrl; ?>" download>
                                    <img src="<?php echo $imageUrl; ?>" alt="Applicant signature" />
                                  </a>
                                <?php
                                } else {
                                  // Handle the case when $users->simage is null or empty
                                  // Display a default image or an error message, or do nothing based on your requirements.
                                }
                                ?>

                                </div>
                            </td>
                        </tr>    

                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

<!-- /.card 11-->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<!--3st box over-->
<script src="<?=base_url();?>assets/vendor/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url();?>assets/vendor/js/bootstrap.bundle.min.js"></script>

<script src="<?=base_url();?>assets/vendor//jquery.dataTables.min.js"></script>
<script src="<?=base_url();?>assets/vendor/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url();?>assets/vendor/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url();?>assets/vendor/js/responsive.bootstrap4.min.js"></script>
<script src="<?=base_url();?>assets/vendor/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url();?>assets/vendor/js/buttons.bootstrap4.min.js"></script>
<script src="<?=base_url();?>assets/vendor/jszip.min.js"></script>
<script src="<?=base_url();?>assets/vendor/pdfmake.min.js"></script>
<script src="<?=base_url();?>assets/vendor/vfs_fonts.js"></script>
<script src="<?=base_url();?>assets/vendor/js/buttons.html5.min.js"></script>
<script src="<?=base_url();?>assets/vendor/js/buttons.print.min.js"></script>
<script src="<?=base_url();?>assets/vendor/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url();?>assets/js/adminlte.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
                       
