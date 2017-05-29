<?php
class LoginModel extends CI_Model {


	function login_authen($username, $password)
	{
		$this->db->select('*');
		$this->db->where('username', $username); //ngecel apakah usernamenya ada di database
		$this->db->where('password', $password); 
		$this->db->from('akun');
		$query = $this->db->get();
		return $query;
	}

	function getData($username, $password)
	{
		$this->db->select('*');
		$this->db->where('username', $username); //ngecel apakah usernamenya ada di database
		$this->db->where('password', $password); 
		$this->db->where('role = 0');
		$this->db->from('akun');
		$query = $this->db->get();
		return $query->result_array();
	}

	function addAcc($data){
		$this->db->insert('akun', $data);
	}



}
?>