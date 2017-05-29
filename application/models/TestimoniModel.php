<?php 

/**
* 
*/
class TestimoniModel extends CI_Model
{
	
	function getTestimoni(){
		$this->db->select('*');
		$this->db->where('verified', 1);
		$this->db->from('testimoni');
		$query = $this->db->get();
		return $query->result_array();
	}

	function createTestimoni($data){
		$this->db->insert('testimoni', $data);
	}

}

 ?>