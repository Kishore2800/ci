<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('form','url');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('user_model');
        $this->load->helper(array('url','form'));
        $this->load->database();

}
    public function index(){
        $this->load->view('login_form');
    }	
    public function signup(){
        $this->load->view('registration_form');
    }	

    public function submit()
    {
        // Set validation rules
        $this->form_validation->set_rules('uemail', 'Uemail', 'required|is_unique[user.Uemail]', ['is_unique' => 'Email already exists.']);
        $this->form_validation->set_rules('upassword', 'Upassword', 'required');
        $this->form_validation->set_rules('urepassword', 'Urepassword', 'required|matches[upassword]');
    
        // Validate form data
        if ($this->form_validation->run() == FALSE) {
            // Validation failed
            $this->load->view('registration_form');
        } else {
            // Validation passed
            $data = [
                'fullname' => $this->input->post('fullname'),
                'uemail' => $this->input->post('uemail'),
                'upassword' => $this->input->post('upassword'),
                'urepassword' => $this->input->post('urepassword'),
            ];
    
            // Store user data in database
            $response = $this->user_model->store($data);
    
            // Check if user was created successfully
            if ($response) {
                // User created successfully
                $this->session->set_flashdata('success', 'Successfully Registered. Login to fill the details.');
                redirect('user/login');
            } else {
                // User creation failed
                $this->session->set_flashdata('error', 'Failed to Register.');
                redirect('user/registration_form');
            }
        }
    }
    
    public function login() {
        if ($this->session->has_userdata('id')) {
            redirect('user/form');
        } else {
            $this->load->view('login_form');
        }
    }
    
    public function login_check() {
        if (!$this->session->has_userdata('id')) {
            redirect('user/login');
        }
    }


    public function login_user(){
        $this->form_validation->set_rules('uemail','Uemail','required');
        $this->form_validation->set_rules('upassword','Upassword','required|matches[upassword]');

        if($this->form_validation->run()==False){
            $this->load->view('login_form');
        }else{
            $uemail = $this->input->post('uemail');
            $upassword = $this->input->post('upassword');
            $this->load->database();
            $this->load->model('user_model');
            $this->user_model->getUser($uemail);
            if($user = $this->user_model->getUser($uemail)){
                if($user->upassword==$upassword){
                    $this->load->library('session');
                    $this->session->set_userdata('id', $user->id);
                        redirect('user/form');                   
                }else{
                    echo "Login Error";
            }
        }else{
                echo "No account exists with this email!";
            }
        }     
    }
        public function form(){
            $this->login_check();
            $this->load->view('form');
       }

      
        public function saveData(){
            $this->load->library('form_validation');

            if ($this->input->server('REQUEST_METHOD') === 'POST') {

                $this->form_validation->set_rules('howdoyou', 'How do you', 'required');
                $this->form_validation->set_rules('name', 'Name', 'required');
                //$this->form_validation->set_rules('img', 'Profile Image', 'required');
                //$this->form_validation->set_rules('resume', 'CV Resume', 'required');
                $this->form_validation->set_rules('lname', 'Last Name', 'required');
                $this->form_validation->set_rules('age', 'Age', 'required|numeric');
                $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
                $this->form_validation->set_rules('gender', 'Gender', 'required');
                $this->form_validation->set_rules('faname', 'Father Name', 'required');
                $this->form_validation->set_rules('maritial', 'Maritial status', 'required');
                $this->form_validation->set_rules('Religion', 'Religion ', 'required');
                $this->form_validation->set_rules('Community', 'Community ', 'required');
                $this->form_validation->set_rules('daperson', 'Differently abled person ', 'required');
                $this->form_validation->set_rules('p_mobile', 'Mobile No ', 'required');
                $this->form_validation->set_rules('p_email', 'Email ', 'required');
                $this->form_validation->set_rules('paddress', 'Present Address ', 'required');
                $this->form_validation->set_rules('State', 'State ', 'required');
                $this->form_validation->set_rules('District', 'District ', 'required');
                $this->form_validation->set_rules('Pincode', 'Pincode ', 'required');
                $this->form_validation->set_rules('peaddress', 'Permenent Address ', 'required');
                $this->form_validation->set_rules('pestate', 'State ', 'required');
                $this->form_validation->set_rules('pedistrict', 'District ', 'required');
                $this->form_validation->set_rules('pepincode', 'Pincode ', 'required');
                $this->form_validation->set_rules('kaddress', 'KYC Address ', 'required');
                $this->form_validation->set_rules('kstate', 'State ', 'required');
                $this->form_validation->set_rules('kdistrict', 'District ', 'required');
                $this->form_validation->set_rules('kpincode', 'Pincode ', 'required');
                $this->form_validation->set_rules('emg_name', 'Emergency Name ', 'required');
                $this->form_validation->set_rules('emg_relationship', 'Emergency Relationship ', 'required');
                $this->form_validation->set_rules('emg_con_number', 'Contact Number ', 'required');
                $this->form_validation->set_rules('emg_address', 'Emergency Address ', 'required');
                $this->form_validation->set_rules('nomname', 'Nominee Name ', 'required');
                $this->form_validation->set_rules('nom_relationship', 'Nominee Relationship ', 'required');
                $this->form_validation->set_rules('nom_number', 'Nominee Contact ', 'required');
                $this->form_validation->set_rules('nom_address', 'Nominee Address ', 'required');
                $this->form_validation->set_rules('customRadio1', ' Blood Relation ', 'required');
                $this->form_validation->set_rules('sslcname', ' University', 'required');
                $this->form_validation->set_rules('sslcmark', 'Mark ', 'required');
                $this->form_validation->set_rules('sslcyop', 'Year of Passing ', 'required');
                $this->form_validation->set_rules('sslcbreak', 'SSLC Break', 'required');
                $this->form_validation->set_rules('hscname', 'University ', 'required');
                $this->form_validation->set_rules('hscmark', 'Mark ', 'required');
                $this->form_validation->set_rules('hscyop', 'Year of Passing ', 'required');
                $this->form_validation->set_rules('hscbreak', 'HSC Break ', 'required');
                $this->form_validation->set_rules('wrk_exp', 'working Experience ', 'required');
                $this->form_validation->set_rules('fam_name1', 'Family Name ', 'required');
                $this->form_validation->set_rules('fam_relationship1', 'Relationship ', 'required');
                $this->form_validation->set_rules('fam_occupation1', 'Occupation ', 'required');
                $this->form_validation->set_rules('fam_contact1', 'Contact', 'required');
                $this->form_validation->set_rules('aadhar_docname', 'Aadhaar Name', 'required');
                $this->form_validation->set_rules('aadhar_docnum', 'Aadhaar Number', 'required');
                $this->form_validation->set_rules('bank_book_name', 'Bank Number', 'required');
                $this->form_validation->set_rules('bank_book_num', 'Bank Number', 'required');
                $this->form_validation->set_rules('ifsc1_num', 'IFSC Number', 'required');
                $this->form_validation->set_rules('Hobbies', 'Hobbies', 'required');
                /*$this->form_validation->set_rules('Strength', 'Strength', 'required');
                $this->form_validation->set_rules('customRadio4', 'Drinking Habbit', 'required');
                $this->form_validation->set_rules('customRadio5', 'Smoking Habbit', 'required');
                $this->form_validation->set_rules('ref_name', 'Refernce Name', 'required');
                $this->form_validation->set_rules('ref_designation', 'Refernce Designation ', 'required');
                $this->form_validation->set_rules('ref_Organization_name', 'Refernce Organization ', 'required');
                $this->form_validation->set_rules('ref_con_um', 'Refernce Contact', 'required');
                $this->form_validation->set_rules('ref_email_id', 'Refernce Email ', 'required');
                //$this->form_validation->set_rules('simage', 'Signature', 'required');*/
                if ($this->form_validation->run() == false) {
                   $data = array();
                    $this->load->view('form', $data);
                } else {

                extract($_POST);
            $data = [
                "howdoyou" => $howdoyou,
                "emp_ref" => $emp_ref,
                "name" => $name,
                "lname" => $lname,
                "age" => $age,
                "dob" => $dob,
                "gender" => $gender,
                "faname" => $faname,
                "maritial" => $maritial,
                "sname" => $sname,
                "Religion" => $Religion,
                "Community" => $Community,
                "daperson" => $daperson,
                "ifdetails" => $ifdetails,
                "p_mobile" => $p_mobile,
                "p_email" => $p_email,
                "paddress" => $paddress,
                "State" => $State,
                "District" => $District,                
                "Pincode" => $Pincode,
                "peaddress" => $peaddress,
                "pestate" => $pestate,
                "pedistrict" => $pedistrict,               
                "pepincode" => $pepincode,
                "kaddress" => $kaddress,
                "kstate" => $kstate,
                "kdistrict" => $kdistrict,
                "kpincode" => $kpincode,
                "emg_name" => $emg_name,
                "emg_relationship" => $emg_relationship,
                "emg_con_number" => $emg_con_number,
                "emg_address" => $emg_address,
                "nomname" => $nomname,
                "nom_relationship" => $nom_relationship,
                "nom_number" => $nom_number,
                "nom_address" => $nom_address,
                "customRadio1" => $customRadio1,
                "blood_name" => $blood_name,
                "blood_emp_id" => $blood_emp_id,
                "blood_relationship" => $blood_relationship,
                "blood_department" => $blood_department,
                "sslcname" => $sslcname,
                "sslcmark" => $sslcmark,
                "sslcyop" => $sslcyop,
                "sslcbreak" => $sslcbreak,
                "hscname" => $hscname,
                "hscmark" => $hscmark,
                "hscyop" => $hscyop,
                "hscbreak" => $hscbreak,
                "ug_degree"=>$ug_degree,
                "ugname" => $ugname,
                "ugmark" => $ugmark,
                "ugyop" => $ugyop,
                "ugbreak" => $ugbreak,
                "pg_degree"=>$pg_degree,
                "pgname" => $pgname,
                "pgmark" => $pgmark,
                "pgyop" => $pgyop,
                "pgbreak" => $pgbreak,
                "oths_name" => $oths_name,
                "oths_mark" => $oths_mark,
                "oths_yop" => $oths_yop,
                "oths_break" => $oths_break,
                "wrk_exp" => $wrk_exp,
                "customRadio2" => $customRadio2,
                "customRadio3" => $customRadio3,
                "comp_name" => $comp_name,
                "experience_designation" => $experience_designation,
                "Reason_for_Leaving"=>$Reason_for_Leaving,
                "from_date" => $from_date,
                "to_date" => $to_date,
                 /*"add_comp_name1" => $add_comp_name1,
                "add_experience_designation1" => $add_experience_designation1,
                "add_Reason_for_Leaving1"=>$add_Reason_for_Leaving1,
                "add_from_date1" => $add_from_date1,
                "add_to_date1" => $add_to_date1,
                "add_comp_name2" => $add_comp_name2,
                "add_experience_designation2" => $add_experience_designation2,
                "add_Reason_for_Leaving2"=>$add_Reason_for_Leaving2,
                "add_from_date2" => $add_from_date2,
                "add_to_date2" => $add_to_date2,*/
                "fam_name1" => $fam_name1,
                "fam_relationship1" => $fam_relationship1,
                "fam_occupation1" => $fam_occupation1,
                "fam_contact1" => $fam_contact1,
                "fam_name2" => $fam_name2,
                "fam_relationship2" => $fam_relationship2,
                "fam_occupation2" => $fam_occupation2,
                "fam_contact2" => $fam_contact2,
                "fam_name3" => $fam_name3,
                "fam_relationship3" => $fam_relationship3,
                "fam_occupation3" => $fam_occupation3,
                "fam_contact3" => $fam_contact3,
                "fam_name4" => $fam_name4,
                "fam_relationship4" => $fam_relationship4,
                "fam_occupation4" => $fam_occupation4,
                "fam_contact4" => $fam_contact4,
                "fam_name5" => $fam_name5,
                "fam_relationship5" => $fam_relationship5,
                "fam_occupation5" => $fam_occupation5,
                "fam_contact5" => $fam_contact5,
                "aadhar_docname" => $aadhar_docname,
                "aadhar_docnum" => $aadhar_docnum,
                "pan_doc_name" => $pan_doc_name,
                "pan_doc_num" => $pan_doc_num,
                "bank_book_name" => $bank_book_name,
                "bank_book_num" => $bank_book_num,
                "ifsc1_num" => $ifsc1_num,
                "drivling_doc_name" => $drivling_doc_name,
                "drivling_doc_num" => $drivling_doc_num,
                "smart_doc_name" => $smart_doc_name,
                "smart_doc_num" => $smart_doc_num,
                "Hobbies" => $Hobbies,
                "Strength" => $Strength,
                "Weakness" => $Weakness,
                "Achivements" => $Achivements,
                "Award" => $Award,
                "customRadio4" => $customRadio4,
                "customRadio5" => $customRadio5,
                "ref_name" => $ref_name,
                "ref_designation" => $ref_designation,
                "ref_Organization_name" => $ref_Organization_name,
                "ref_con_um" => $ref_con_um,
                "ref_email_id" => $ref_email_id,
                "ref_name1" => $ref_name1,
                "ref_designation1"=>$ref_designation1,
                "ref_Organization_name1"=>$ref_Organization_name1,
                "ref_con_um1" => $ref_con_um1,
                "ref_email_id1"=>$ref_email_id1,
            ];

            $this->load->model('User_model');
        
            $upload_photo_config = array( 'upload_path' => './uploads/profilepic/',  'allowed_types' => '*',  'max_size' => 1024,   );
            $photo = $this->User_model->file_upload ($upload_photo_config, 'img');
            if ($photo->response == true) { $data['img']=  $photo->filepath; }

            $upload_resume_config = array('upload_path' => './uploads/resume/', 'allowed_types' => '*',  'max_size' => 1024,  );
            $resume = $this->User_model->file_upload ($upload_resume_config, 'resume');
            if ($resume->response == true) { $data['resume']=  $resume->filepath; }

            $upload_sign_config = array( 'upload_path' => './uploads/signature/',  'allowed_types' => '*',  'max_size' => 1024,   );
            $signature = $this->User_model->file_upload ($upload_sign_config, 'simage');
            if ($signature->response == true) { $data['simage']=  $signature->filepath; }
          
            $result=$this->User_model->insertData($data);
            if($result !== false){
                $userid = "NY0000".$result;
                $this->db->where('id', $result);
                $this->db->update('user', ['userid'=> $userid]);
                $this->session->unset_userdata('success','successfully Submitted');
                $this->load->view('success');
            } else {
                echo 'Failed to Apply';
            }
        }
    } else {
        // Handle non-POST requests (e.g., direct access to the URL)
        redirect('form');
    }

}
        public function logout(){
            $this->session->unset_userdata('id');
            redirect('user/login');
        }

        public function change_password(){
            if($this->session->has_userdata('id')){
                $this->load->view('change_password_form');
            }else{
                redirect('user/login');
            }
    }

    public function update_password(){
            $this->form_validation->set_rules('old_password','Old Password','required');
			$this->form_validation->set_rules('new_password','New Password','required');

			if($this->form_validation->run()==FALSE){
					$this->load->view('change_password_form');
			}else{
				$old_password = $this->input->post('old_password');
				$new_password = $this->input->post('new_password');
                    $confirm_password = $this->input->post('confirm_password');
				

					if(strcmp($old_password,$new_password)==0){
						$message = "New password should be a different password";
					}else{

						$id = $this->session->userdata('id');
						if($this->user_model->oldPasswordMatches($id,$old_password)){
							$this->user_model->changeUserPassword($id,$new_password);
							$message = "Password changed successfully";
						}else{
							$message = "Your old Password is wrong!";
						}
						$this->load->view('change_password_form',array('message'=>$message));
					}

                
					
				}
            }
                public function forgot_password(){
				    $this->load->view('forgot_password');
			}

			    public function send_password(){
				    $this->form_validation->set_rules('uemail','Uemail','required');

				if($this->form_validation->run()==FALSE){
					$this->load->view('forgot_password');
				}else{
					$uemail  = $this->input->post('uemail');
					if($user = $this->user_model->getUserByEmail($uemail)){
						$to = $uemail;
						$subject = "Password";
						$message = "Your password is".$user->upassword;
						$headers = "From:.com\r\n";

						mail($to,$subject,$message,$headers);

						echo "Email has been sent!. Please check your inbox";
					}else{
						echo "No user with this email exist!";
					}
				}

			}
         
}
?>
