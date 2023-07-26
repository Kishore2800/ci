<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper('form','url');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('admin_model');
        $this->load->database();
    }
    
        public function index(){
            $this->load->view('admin/admin/'); // Load the Admin_model
        }

        public function login()
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
    
    
            if (!empty($admin) && password_verify($password, $admin->password)) {
                // Login successful
                $this->load->view('Admin/candidate_list');
            } else {
                // Invalid credentials
                $data['error_message'] = "Invalid username or password";
                $this->load->view('Admin/admin_login', $data);
            }
        }


    public function candidate_list(){
        $this->load->model('Admin_model');
        $data['candidates'] = $this->Admin_model->getAllCandidates();
        $this->load->view('admin/candidate_list', $data);
   }
   public function displaydata($id) {
        $data['users'] = $this->Admin_model->get_candidate($id);
        $this->load->view('admin/display_record', $data);
       
}

    public function deleteUser($id) {
        // Load the necessary model
        $this->load->model('User_model');

        // Delete the user with the specified ID
        $this->User_model->deleteUser($id);
        
        // Redirect to the candidate list page or any appropriate page
        redirect('Admin/candidate_list');
    }
   
    public function admin_form(){
            $this->load->view('admin/admin_form');
}

    public function admin_saveData() {
       
        $this->load->view('admin/admin_form');
        $this->form_validation->set_rules('inter_name', 'Interviewer Name', 'required');
        $this->form_validation->set_rules('inter_desig', 'Interviewer Designation', 'required');
        $this->form_validation->set_rules('inter_date', 'Interview Date', 'required');
        $this->form_validation->set_rules('inter_location', 'Interview Location', 'required');
        $this->form_validation->set_rules('recommendation', 'Recommendation', 'required');
        $this->form_validation->set_rules('inter_note', 'Interviewer Note', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/admin_form');
        } else {
            $data = array(
                'inter_name' => $this->input->post('inter_name'),
                'inter_desig' => $this->input->post('inter_desig'),
                'inter_date' => $this->input->post('inter_date'),
                'inter_location' => $this->input->post('inter_location'),
                'recommendation' => $this->input->post('recommendation'),
                'inter_note' => $this->input->post('inter_note')
            );
            $recruiter_id = $this->Admin_model->saveData($data);
            
            if ($recruiter_id) {
                echo 'Successfully Submited';
                $this->load->view('admin/admin_form');
            } else {
                echo 'Failed to Submit';
            }
        }
    }
    public function dashboard(){
        $this->load->view('management/dashboard'); // Load the Admin_model
       
        }

        public function interview(){
            $this->load->view('interviewer/interviewer_login'); // Load the Admin_model
           
            }

        public function Recruiter(){
            $this->load->view('interviewer/recruiter'); // Load the Admin_model
           
            }
        public function interviewer1(){

            $this->load->view('interviewer/interviewer1'); // Load the Admin_model
           
            }
            public function interviewer2(){
                $this->load->view('interviewer/interviewer2'); // Load the Admin_model
               
                }
                public function interviewer3(){
                    $this->load->view('interviewer/interviewer3'); // Load the Admin_model
                   
                    }
                   
}
?>

