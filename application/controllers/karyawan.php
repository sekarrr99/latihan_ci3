<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class karyawan extends CI_Controller {
	public function __construct(){
		parent::__construct();
		logged_in();
		$this->load->model('m_user');
	}

	public function index()
	{
		$data['user']= $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$data['title']= 'Input Data Karyawan';
		
		$this->load->view('templates/menuheader', $data);
		$this->load->view('templates/menusidebar', $data);
		$this->load->view('karyawan/index', $data);
		$this->load->view('templates/menufooter');
	}
	public function profile()
	{
		$data['user']= $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$data['title']= 'Profile';
		
		$this->load->view('templates/menuheader', $data);
		$this->load->view('templates/menusidebar', $data);
		$this->load->view('karyawan/profile', $data);
		$this->load->view('templates/menufooter');
	}
	public function cuti()
	{
		$data['user']= $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$data['cuti']= $this->db->get_where('cuti')->result_array();
		$data['title']= 'Cuti';
		
		$this->load->view('templates/menuheader', $data);
		$this->load->view('templates/menusidebar', $data);
		$this->load->view('karyawan/cuti', $data);
		$this->load->view('templates/menufooter');
	}
	public function tambah_cuti()
	{
		$data['user']= $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		$data['title']= 'Pengajuan Cuti';
		
		$this->load->view('templates/menuheader', $data);
		$this->load->view('templates/menusidebar', $data);
		$this->load->view('karyawan/tambah_cuti', $data);
		$this->load->view('templates/menufooter');
	}
	public function input_data()
	{
		$nbm= $this->input->post('nbm');
		$name= $this->input->post('name');
		$email= $this->input->post('email');
		$tgl_lahir= $this->input->post('tgl_lahir');
		$pendidikan_terakhir= $this->input->post('pendidikan_terakhir');
		$jabatan= $this->input->post('jabatan');
		$unit= $this->input->post('unit');
		$id_user= $this->session->userdata('id_user');

		$photo= $_FILES['photo'];
		$path= 'upload';
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'png|jpg|jpeg|heic';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('photo')) {
			$error = array('error' => $this->upload->display_errors());
		}else {
			$data = array('upload_data' => $this->upload->data());
		}
		if (!$this->upload->data('file_name')) {
			$photo = 'Tidak Ada File';
		}else{
			$photo = $this->upload->data('file_name');
		}

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
		$this->db->insert('karyawan', $data);
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">
		Data Berhasil Diinput.
	  </div>');
		redirect('karyawan');
	}
	public function input_cuti()
	{
		$nama= $this->input->post('nama');
		$tanggal_cuti= $this->input->post('tanggal_cuti');
		$lama_cuti= $this->input->post('lama_cuti');
		$alamat_cuti= $this->input->post('alamat_cuti');
		$keterangan= $this->input->post('keterangan');

		$data= array(
			'nama'=> $nama,
			'tanggal_cuti'=> $tanggal_cuti,
			'lama_cuti'=> $lama_cuti,
			'alamat_cuti'=> $alamat_cuti,
			'keterangan'=> $keterangan
		);

		$this->db->insert('cuti', $data);
		redirect('karyawan/cuti');
	}
	public function delete_cuti($id_cuti){
		$where= array('id_cuti' => $id_cuti);
		$this->m_user->delete_data($where, 'cuti');
		redirect('karyawan/cuti');
	}

	public function update_cuti(){
		$id_cuti= $this->input->post('id_cuti');
		$nama= $this->input->post('nama');
		$tanggal_cuti= $this->input->post('tanggal_cuti');
		$lama_cuti= $this->input->post('lama_cuti');
		$alamat_cuti= $this->input->post('alamat_cuti');
		$keterangan= $this->input->post('keterangan');

		$data= array(
			'nama'=> $nama,
			'tanggal_cuti'=> $tanggal_cuti,
			'lama_cuti'=> $lama_cuti,
			'alamat_cuti'=> $alamat_cuti,
			'keterangan'=> $keterangan,
		);
		$where=array('id_cuti'=>$id_cuti);
		$this->m_user->edit($where, $data, 'cuti');
		redirect('karyawan/cuti');
	}
}
