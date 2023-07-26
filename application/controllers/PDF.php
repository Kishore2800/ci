<?php 
	use Dompdf\Dompdf;
	class PDF extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->model('user_model');
            $this->load->helper('url');
            
        }
    
        public function download($id) {

            $user = $this->user_model->getUserData($id);
            $html = $this->load->view('admin/pdf', array('user' => $user), true);
            $dompdf = new Dompdf();
            $dompdf->set_paper('A4', 'portrait'); // 'a3' for A3 size, 'portrait' for portrait orientation
            $dompdf->loadHtml($html);
            $dompdf->render();
            $output = $dompdf->output();
            $pdf = $id . '.pdf'; // Name the PDF file with the user's ID number
            $save_path = 'H:/pdf/' . $pdf; // Specify the directory to save the PDF
    
            file_put_contents($save_path, $output);
    
            // Provide the file for download
            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename="' . $pdf . '"');
            header('Content-Length: ' . filesize($save_path));
            readfile($save_path);
            exit;
        }
	}

?>