<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	
   public function index(){
   	       $this->load->view('templates/header');
			$data['tram'] = $this->db->select('*')->from('tram')->get()->result_array();
            $sql = "SELECT * FROM tuyenxe";
            $result = $this->db->query($sql);
            $data['tuyenxe'] = $result->result_array();
			$this->load->view('home',$data);

	}
}
