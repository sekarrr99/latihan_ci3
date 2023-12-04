<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class karyawan extends CI_Controller {

	public function index()
	{
		$data['user']= $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$data['title']= 'Corporate Zen';
		
		$this->load->view('templates/menuheader', $data);
		$this->load->view('templates/menusidebar', $data);
		$this->load->view('karyawan/index', $data);
		$this->load->view('templates/menufooter');
	}
}
