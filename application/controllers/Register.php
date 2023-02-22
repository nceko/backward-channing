<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$data['title'] = "Registrasi Apps";
		$this->load->view('themes/login/header',$data);
		$this->load->view('login/register');
		$this->load->view('themes/login/footer');
	}
}
