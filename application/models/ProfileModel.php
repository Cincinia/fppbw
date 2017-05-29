<?php 

/**
* 
*/
class ProfileModel extends CI_Model
{
		function updateData($username, $data){
		$this->db->where('username', $username);
		$this->db->update('akun', $data);
	}

	function getData($username){
		$this->db->where('username', $username);
		$query = $this->db->get('akun');
		return $query->result_array();
	}

	function updatePassword($username, $newpassword){
		$this->db->set('password', $newpassword);
		$this->db->where('username', $username);
		$this->db->update('akun');
	}

}

 ?>