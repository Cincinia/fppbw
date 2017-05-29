<?php 

/**
* 
*/
class CollectionModel extends CI_Model
{
	
	function getAll(){
		$query = $this->db->get('barang');
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

	function getReguler(){
		$this->db->select('*');
		//Wherenya harusnya yang laku paling banyak. masi bingung query nya.
		$this->db->where('custom', '0');
		$this->db->from('barang');
		$query = $this->db->get();
		return $query->result_array();
	}

	function getProduct($kategori){
		$this->db->select('*');
		$customtidakya = strpos($kategori, "ust");

		if ($customtidakya == FALSE) {
		$this->db->where('custom', '0');
		$this->db->where('kategori', $kategori);
		}
		else{
		$kategorifix = str_replace("custom", "", $kategori);
		$this->db->where('custom', '1');
		$this->db->where('kategori', $kategorifix);
		}
		$this->db->from('barang');
		$query = $this->db->get();
		return $query->result_array();
	}

	function getTas(){
		$this->db->select('*');
		$this->db->where('kategori', 'tas');
		$this->db->from('barang');
		$query = $this->db->get();
		return $query->result_array();
	}

	function getBaju(){
		$this->db->select('*');
		$this->db->where('kategori', 'baju');
		$this->db->from('barang');
		$query = $this->db->get();
		return $query->result_array();
	}

}

 ?>