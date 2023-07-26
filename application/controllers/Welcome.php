<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$view_data = array('title'=>'Jayapriya Group of Institutions', 'message'=>'Welcome to our site', 'sarray'=>[1,2,3,4,5]);
		$this->load->view('welcome_message', $view_data);
	}
	public function sample(){
		$nom_detail = $this->db->get_where('nom_detail')->result();
		foreach ($nom_detail as $item):
			echo $item->nomname."<br/>";
			echo $item->nomrelation	."<br/>";
			echo $item->nomcontact."<br/>";
		endforeach;
	}
	public function form(){
			
			$this->load->view('form');
		}
}
	
