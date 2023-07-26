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

  <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
table.a {
  table-layout: auto;
  width: 100%;  
}
table.b {
  table-layout: auto;
  width: 100%;  
}
table.c {
  table-layout: auto;
  width: 100%;  
}
table.d {
  table-layout: auto;
  width: 100%;  
}
table.e {
  table-layout: auto;
  width: 100%;  
}
table.f {
  table-layout: auto;
  width: 100%;  
}
table.g {
  table-layout: auto;
  width: 100%;  
}
table.h {
  table-layout: auto;
  width: 100%;  
}
table.i {
  table-layout: auto;
  width: 100%;  
}
table.j {
  table-layout: auto;
  width: 100%;  
}
table.k {
  table-layout: auto;
  width: 100%;  
}
table.l {
  table-layout: auto;
  width: 100%;  
}
table.m {
  table-layout: auto;
  width: 100%;  
}
table.n {
  table-layout: auto;
  width: 100%;  
}
table.o {
  table-layout: auto;
  width: 100%;  
}
table.p {
  table-layout: auto;
  width: 100%;  
}
table.q {
  table-layout: auto;
  width: 100%;  
}
table.r {
  table-layout: auto;
  width: 100%;  
}
table.s {
  table-layout: auto;
  width: 100%;  
}
table.t {
  table-layout: auto;
  width: 100%;  
}
table.u {
  table-layout: auto;
  width: 100%;  
}
table.v {
  table-layout: auto;
  width: 100%;  
}
table.w {
  table-layout: auto;
  width: 100%;  
}
table.x {
  table-layout: auto;
  width: 100%;  
}
table.y {
  table-layout: auto;
  width: 100%;  
}
</style>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md  ">
    <div class="container" >
      
        <img src="<?=base_url("assets/images/logo.png");?>" alt="JpLogo" class="brand-image img-rectangle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"></span>
      </a>
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
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$user->userid?></h1>
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
                <table border ="1" class="a">
                  <thead>
                    <tr>
                        <th>S.No</th>
                        <th>#User id</th>
                        <th>You Know?</th>
                        <th>Referenced-Name</th>
                        <th>Applicant image</th>
                        <th>Resume</th>
                        </tr>
                  </thead>

                  <tbody>
                  <tr>
                    <td><?=$user->id; ?></td>
                    <td><?=$user->userid?></td>
                    <td><?=$user->howdoyou?></td>
                    <td><?=$user->emp_ref?></td>
                    <td><?=$user->img?></td>
                    <td><?=$user->resume?></td>
                    </tr>   
                  </tbody>
                </table>
               <BR>
                <table border ="1" class="b">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Father Name</th>
                    </tr>
                  </thead>
                 
                    <td><?=$user->name?></td>
                    <td><?=$user->lname?></td>
                    <td><?=$user->age?></td>
                    <td><?=$user->dob?></td>
                    <td><?=$user->gender?></td>
                    <td><?=$user->faname?></td>
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
                <table border ="1" class="c">
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
                        <td><?=$user->Religion?></td>
                        <td><?=$user->sname?></td>
                        <td><?=$user->maritial?></td>
                        <td><?=$user->Community?></td>
                        <td><?=$user->daperson?></td>
                        <td><?=$user->ifdetails?></td>
                        <td><?=$user->p_mobile?></td>
                        <td><?=$user->p_email?></td><td>
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
                <table border ="1" class="d">
                  <thead>
                    <tr>
                            <th>Present Address</th>
                            <th>District</th>
                            <th>State</th>
                            <th>Pincode</th>
                            <th>Permenent Address</th>
                            <th>District</th>
                            <th>State</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            <td><?=$user->paddress?></td>
                            <td><?=$user->District?></td>
                            <td><?=$user->State?></td>
                            <td><?=$user->Pincode?></td>
                            <td><?=$user->peaddress?></td>
                            <td><?=$user->pedistrict?></td>
                            <td><?=$user->pestate?></td>
                     </tr>    
                  </tfoot>
                  </table>
                    <BR>
                  <table border ="1" class="e">
                  <thead>
                    <tr>
                            <th>Pincode</th>
                            <th>KYC Address</th>
                            <th>District</th>
                            <th>State</th>
                            <th>Pincode</th>
                            
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            <td><?=$user->pepincode?></td>
                            <td><?=$user->kaddress?></td>
                            <td><?=$user->kdistrict?></td>
                            <td><?=$user->kstate?></td>
                            <td><?=$user->kpincode?></td>
                          
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
                <table border ="1" class="f">
                  <thead>
                    <tr>
                            <th>Emergency Name</th>
                            <th>Emergency Relation</th>
                            <th>Emergency mobile</th>
                            <th>Emergency Address</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            <td><?=$user->emg_name?></td>
                            <td><?=$user->emg_relationship?></td>
                            <td><?=$user->emg_con_number?></td>
                            <td><?=$user->emg_address?></td>
                           
                      </tr>    
                  </tfoot>
                  </table>
                  <br>
                <table border ="1" class="g">
                  <thead>
                    <tr>
                            <th>Nominee Address</th>
                            <th>Nominee Name</th>
                            <th>Nominee Relation</th>
                            <th>Nominee mobile</th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr> 
                            <td><?=$user->nom_address?></td>
                            <td><?=$user->nomname?></td>
                            <td><?=$user->nom_relationship?></td>
                            <td><?=$user->nom_number?></td>
                      </tr>    
                  </tfoot>
                  </table>
                  <BR>
                  <table border ="1" class="h">
                  <thead>
                    <tr>
                           
                            <th>Any Blood Relation</th>
                            <th>b_Reltion Name</th>
                            <th>Employee ID</th>
                            <th>Relationship </th>
                            <th>Department </th>
                            
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                           
                            <td><?=$user->customRadio1?></td>
                            <td><?=$user->blood_name?></td>
                            <td><?=$user->blood_emp_id?></td>
                            <td><?=$user->blood_relationship?></td>
                            <td><?=$user->blood_department?></td>
                           
                        </tr>    
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

<!-- /.card 4-->
<br>
<div class="card">
              <div class="card-header">
                <h3 class="card-title"><u>Education Details</u></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table border ="1" class="i">
                  <thead>
                    <tr>
                            <th>Board/University<br>(SSLC)</th>
                            <th>% of Mark<br>(SSLC)</th>
                            <th>Year of Passing<br>(SSLC)</th>
                            <th>Break edu<br>(SSLC)</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                            <td><?=$user->sslcname?></td>
                            <td><?=$user->sslcmark?></td>
                            <td><?=$user->sslcyop?></td>
                            <td><?=$user->sslcbreak?></td>
                  </tr>    
                  </tfoot>
                </table>
                <BR>
                  <table border ="1" class="j">
                  <thead>
                    <tr>
                            <th>Name of Qualification<br>(HSC)</th>
                            <th>% of Mark<br>(HSC)</th>
                            <th>Year of Passing<br>(HSC)</th>
                            <th>Break edu<br>(HSC)</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                            <td><?=$user->hscname?> </td>
                            <td><?=$user->hscmark?></td>
                            <td><?=$user->hscyop?></td>
                            <td><?=$user->hscbreak?></td>
                  </tr>    
                  </tfoot>
                </table>
                <BR>
                  <table border ="1" class="k">
                  <thead>
                    <tr>
                            <th>Ug Degree<br>B.Sc/BCA</th>
                            <th>Board/University<br>(Ug Degree)</th>
                            <th>% of Mark<br>(Ug Degree)</th>
                            <th>Year of Passing<br>(Ug Degree)</th>
                            <th>Break edu<br>(Ug Degree)</th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                            <td><?=$user->ug_degree?></td>
                            <td><?=$user->ugname?></td>
                            <td><?=$user->ugmark?></td>
                            <td><?=$user->ugyop?></td>
                            <td><?=$user->ugbreak?></td>
                  </tr>    
                  </tfoot>
                </table>
                <BR>
                  <table border ="1" class="l">
                  <thead>
                    <tr>
                            <th>Pg Degree<br>M.sc/MCA</th>
                            <th>Board/University<br>(Pg Degree)</th>
                            <th>% of Mark<br>(Pg Degree)</th>
                            <th>Year of Passing<br>(Pg Degree)</th>
                            <th>Break edu<br>(Pg Degree)</th>
                            
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            <td><?=$user->pg_degree?></td>
                            <td><?=$user->pgname?></td>
                            <td><?=$user->pgmark?></td>
                            <td><?=$user->pgyop?></td>
                            <td><?=$user->pgbreak?></td>
                            
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
                <table border ="1" class="m">
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
                            <td><?=$user->oths_name?></td>
                            <td><?=$user->oths_mark?></td>
                            <td><?=$user->oths_yop?></td>
                            <td><?=$user->oths_break?></td>
                            <td><?=$user->wrk_exp?></td>
                            <td><?=$user->customRadio2?></td>
                            <td><?=$user->customRadio3?></td>
                            <td><?=$user->comp_name?></td>
                            <td><?=$user->experience_designation?></td>
                            
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
                <table border ="1" class="n">
                  <thead>
                    <tr>
                          <th>Experience In Last Employer<br>(company Name)</th>
                            <th>Designation</th>
                            <th>Reason for reliving</th>
                            <th>Duration From Date</th>
                            <th>Duration To Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>

                            <td><?=$user->comp_name?></td>
                            <td><?=$user->experience_designation?></td>
                            <td><?=$user->Reason_for_Leaving?></td>
                            <td><?=$user->from_date?></td>
                            <td><?=$user->to_date?></td>

                    </tr>    
                  </tfoot>
                </table>
                <BR>
                  <table border ="1" class="o">
                  <thead>
                    <tr>
                            <th>Experience In Last Employer<br>(company Name)</th>
                            <th>Designation</th>
                            <th>Reason for reliving</th>
                            <th>Duration From Date</th>
                            <th>Duration To Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            <td><?=$user->add_comp_name1?></td>
                            <td><?=$user->add_experience_designation1?></td>
                            <td><?=$user->add_Reason_for_Leaving1?></td>
                            <td><?=$user->add_from_date1?></td>
                            <td><?=$user->add_to_date1?></td>
                    </tr>    
                  </tfoot>
                </table>
                <BR>
                  <table border ="1" class="p">
                  <thead>
                    <tr>
                            <th>Experience In Last Employer<br>(company Name)</th>
                            <th>Designation</th>
                            <th>Reason for reliving</th>
                            <th>Duration From Date</th>
                            <th>Duration To Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            <td><?=$user->add_comp_name2?></td>
                            <td><?=$user->add_experience_designation2?></td>
                            <td><?=$user->add_Reason_for_Leaving2?></td>
                            <td><?=$user->add_from_date2?></td>
                            <td><?=$user->add_to_date2?></td>
                            
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
                <table border ="1" class="q">
                  <thead>
                    <tr>
                            <th>Family Details<br>Name</th>
                            <th>Family<br>Relationship</th>
                            <th>Family<br>Occupation</th>
                            <th>Family<br>Contact</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            <td><?=$user->fam_name1?></td>
                            <td><?=$user->fam_relationship1?></td>
                            <td><?=$user->fam_occupation1?></td>
                            <td><?=$user->fam_contact1?></td>
                    </tr>    
                  </tfoot>
                </table>
                <BR>
                <table border ="1" class="r">
                  <thead>
                    <tr>
                            <th>Family Details<br>Name</th>
                            <th>Family<br>Relationship</th>
                            <th>Family<br>Occupation</th>
                            <th>Family<br>Contact</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            <td><?=$user->fam_name2?></td>
                            <td><?=$user->fam_relationship2?></td>
                            <td><?=$user->fam_occupation2?></td>
                            <td><?=$user->fam_contact2?></td>
                    </tr>    
                  </tfoot>
                </table>
                <BR><br>
                <table border ="1" class="s">
                  <thead>
                    <tr>
                            <th>Family Details<br>Name</th>
                            <th>Family<br>Relationship</th>
                            <th>Family<br>Occupation</th>
                            <th>Family<br>Contact</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            <td><?=$user->fam_name3?></td>
                            <td><?=$user->fam_relationship3?></td>
                            <td><?=$user->fam_occupation3?></td>
                            <td><?=$user->fam_contact3?></td>
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
                <table border ="1" class="t">
                  <thead>
                    <tr>
                            <th>KYC Details<br>Aadhar Name</th>
                            <th>Aadhar<br>Number</th>
                            <th>PAN<br>Name</th>
                            <th>PAN<br>Number</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            <td><?=$user->aadhar_docname?></td>
                            <td><?=$user->aadhar_docnum?></td>
                            <td><?=$user->pan_doc_name?></td>
                            <td><?=$user->pan_doc_num?></td>
                    </tr>    
                  </tfoot>
                </table>
                <BR>
                  <table border ="1" class="u">
                  <thead>
                    <tr>
                            <th>Bank PassBook<br>Name</th>
                            <th>Bank PassBook<br>Number</th>
                            <th>Bank PassBook<br>IFSC</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            <td><?=$user->bank_book_name?></td>
                            <td><?=$user->bank_book_num?></td>
                            <td><?=$user->ifsc1_num?></td>
                    </tr>    
                  </tfoot>
                </table>
                <BR>
                  <table border ="1" class="v">
                  <thead>
                    <tr>
                            <th>Driving Licence<br>Name</th>
                            <th>Driving Licence<br>Number</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            <td><?=$user->drivling_doc_name?></td>
                            <td><?=$user->drivling_doc_num?></td>
                    </tr>    
                  </tfoot>
                </table>
                <BR>
                  <table border ="1" class="w">
                  <thead>
                    <tr>
                            <th>Smart Card<br>Name</th>
                            <th>Smart Card<br>Number</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                            <td><?=$user->smart_doc_name?></td>
                            <td><?=$user->smart_doc_num?></td>
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
                <table border ="1" class="x">
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
                            
                            <td><?=$user->Hobbies?></td>
                            <td><?=$user->Strength?></td>
                            <td><?=$user->Weakness?></td>
                            <td><?=$user->Achivements?></td>
                            <td><?=$user->Award?></td>
                            <td><?=$user->customRadio4?></td>
                            <td><?=$user->customRadio5?>  
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
                <table border ="1" class="y">
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
                            <td><?=$user->ref_name?></td>
                            <td><?=$user->ref_designation?></td>
                            <td><?=$user->ref_Organization_name?></td>
                            <td><?=$user->ref_con_um?></td>
                            <td><?=$user->ref_email_id?></td>
                            <td><?=$user->simage?></td>  
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


</body>
</html>
                       