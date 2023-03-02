<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kerusakan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Home";
		$this->load->view('themes/main/header', $data);
		$this->load->view('themes/main/navbar');
		$this->load->view('themes/main/sidebar', $data);
		$this->load->view('konsultasi/index', $data);
		$this->load->view('themes/main/footer');
	}
}
