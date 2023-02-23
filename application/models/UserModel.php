<?php

class UserModel extends CI_Model
{
	public function fetch()
	{
		# code...
	}

	public function new()
	{
		$tambah = $this->db->insert('tbl_user',[
			'nama'					=> $this->input->post('nama'),
			'email'					=> $this->input->post('email'),
			'password'				=> md5($this->input->post('password')),
			'id_mst_status_user'	=> $this->input->post('role')
		]);

		return $tambah;
	}
}
