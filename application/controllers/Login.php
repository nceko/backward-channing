<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$data['title'] = "Log In Apps";
		$this->load->view('themes/login/header',$data);
		$this->load->view('login/index');
		$this->load->view('themes/login/footer');
	}
}
