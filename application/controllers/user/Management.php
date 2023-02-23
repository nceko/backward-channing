<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Management extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function index()
	{
		$data['title'] = "Manajemen Pengguna";
		$this->load->view('themes/main/header', $data);
		$this->load->view('themes/main/navbar');
		$this->load->view('themes/main/sidebar', $data);
		$this->load->view('user/management', $data);
		$this->load->view('themes/main/footer');
	}

	public function fetch()
	{
		$this->UserModel->fetch();
	}

	public function new()
	{
		$tambah	= $this->UserModel->new();

		if ($tambah == TRUE) {
			redirect('user/management');
		}
	}

	public function edit($id)
	{
		$data['user']	=	$this->db->get_where('tbl_user', ['id' => $id])->row();
	}

	public function delete($id)
	{
		$users	=	$this->db->get_where('tbl_user', ['id' => $id])->row();
	}

	public function isactive($id)
	{
		$users	=	$this->db->get_where('tbl_user', ['id' => $id])->row();
	}
}
