<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        // Load the database library
        $this->load->database();
    }
    public function getAllCandidates() {
        $query = $this->db->get('user'); // Assuming 'user' is the table name
        return $query->result();
    }
    public function get_candidate($id)
    {
        // Retrieve a candidate by ID from the database
        $query = $this->db->get_where('user', array('id' => $id));
        return $query->row();
        
    }
   
}

?>