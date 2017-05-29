<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class HomeModel extends CI_Model
{
	
	function getBest(){
		$this->db->select('*');
		//Wherenya harusnya yang laku paling banyak. masi bingung query nya.
		$this->db->where('jumlah'. '<=5');
		$this->db->from('barang');
		$query = $this->db->get();
		return $query->result_array();
	}

	function getCustom(){
		$this->db->select('*');
		//Wherenya harusnya yang laku paling banyak. masi bingung query nya.
		$this->db->where('custom', '1');
		$this->db->from('barang');
		$query = $this->db->get();
		return $query->result_array();
	}

	function getPromo(){
		$query = $this->db->get('promo');
		return $query->result_array();
	}

	function getTestiBest(){
		$this->db->select('*');
		$this->db->where('poin' . '>= 8');
		$this->db->where('verified', 1);
		$this->db->from('testimoni');
		$query = $this->db->get();
		return $query->result_array();
	}

}

 ?>