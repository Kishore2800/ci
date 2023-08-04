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
    public function get_admin_by_username_password($username, $password) {

        $query = $this->db->get_where('admin', array('username' => $username, 'password' => $password));
        if ($query->num_rows() === 1) {
            return $query->row();

        } else {
            return FALSE;
        }
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
