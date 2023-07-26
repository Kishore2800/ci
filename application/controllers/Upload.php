<?php 
	class Upload extends CI_Controller{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->helper(array('form', 'url'));
        	$this->load->library('upload');
        	$this->load->model('user_model');
		}
	
		public function index()
		{
			if (isset($_POST['submit'])) {
				$this->do_upload();
				$this->load->view('upload_form', array('error' => ' ' ));
			  }
		  
			  $this->load->view('form');
			}
			public function do_upload() {
				$config['upload_path']          = './uploads/user_resumes';
                $config['allowed_types']        = 'gif|jpg|png|pdf|doc';
                $config['max_size']             = 26200;
				
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }
        }
}
	?>
