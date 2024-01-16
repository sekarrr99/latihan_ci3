<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		logged_in();
		$this->load->model('m_user');
	}
	public function index()
	{
        $data['user']= $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$data['title']= 'Dashboard';
		
		$this->load->view('templates/menuheader', $data);
		$this->load->view('templates/menusidebar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/menufooter');
	}
	public function data_karyawan()
	{
		$data['user']= $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$data['karyawan']= $this->db->get_where('karyawan')->result_array();
		$data['title']= 'Data Karyawan';
		$this->load->view('templates/menuheader', $data);
		$this->load->view('templates/menusidebar', $data);
		$this->load->view('admin/data_karyawan', $data);
		$this->load->view('templates/menufooter');
	}
	public function delete($id_karyawan){
		$where= array('id_karyawan' => $id_karyawan);
		$this->m_user->delete_data($where, 'karyawan');
		redirect('admin/data_karyawan');
	}

	public function update_karyawan(){
		$id_karyawan= $this->input->post('id_karyawan');
		$nbm= $this->input->post('nbm');
		$name= $this->input->post('name');
		$email= $this->input->post('email');
		$tgl_lahir= $this->input->post('tgl_lahir');
		$pendidikan_terakhir= $this->input->post('pendidikan_terakhir');
		$jabatan= $this->input->post('jabatan');
		$unit= $this->input->post('unit');
		$id_user= $this->session->userdata('id_user');

		// $photo= $_FILES['photo'];
		// $path= 'upload';
		// $config['upload_path'] = $path;
		// $config['allowed_types'] = 'png|jpg|jpeg|heic';
		// $this->load->library('upload', $config);
		// $this->upload->initialize($config);
		// if (!$this->upload->do_upload('photo')) {
		// 	$error = array('error' => $this->upload->display_errors());
		// }else {
		// 	$data = array('upload_data' => $this->upload->data());
		// }
		// if (!$this->upload->data('file_name')) {
		// 	$photo = 'Tidak Ada File';
		// }else{
		// 	$photo = $this->upload->data('file_name');
		// }

		$data= array(
			'nbm'=> $nbm,
			'name'=> $name,
			'photo'=> $photo,
			'email'=> $email,
			'tgl_lahir'=> $tgl_lahir,
			'pendidikan_terakhir'=> $pendidikan_terakhir,
			'jabatan'=> $jabatan,
			'unit'=> $unit,
			'id_user'=> $id_user
		);
		$where=array('id_karyawan'=>$id_karyawan);
		$this->m_user->edit($where, $data, 'karyawan');
		redirect('admin/data_karyawan');
	}
}
