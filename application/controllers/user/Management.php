<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Management extends CI_Controller {

	public function index()
	{
		$data['title'] = "Manajemen Pengguna";
		$this->load->view('themes/main/header', $data);
		$this->load->view('themes/main/navbar');
		$this->load->view('themes/main/sidebar');
		$this->load->view('user/management');
		$this->load->view('themes/main/footer');
	}
}
