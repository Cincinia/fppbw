<?php 

/**
* 
*/
class CheckoutModel extends CI_Model
{
	
	function getData($username){
		$this->db->where('username', $username);
		$query = $this->db->get('akun');
		return $query->result_array();
	}

	function addOrder($data){

		$this->db->insert('pemesanan', $data);
	}
}
 ?>