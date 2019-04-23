<?php

class Wikipedia_model extends CI_model{

	public function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

	public function registerAkun($data)
	{
		$this->db->insert('t_user', $data);
		return $this->db->insert_id();
	}

}
