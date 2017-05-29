<?php 

/**
* 
*/
class OrderController extends CI_Controller
{
	function index(){
		$jumlahbarang = count($this->cart->contents());
		$this->load->view('user/order', array('jumlahbarang'=> $jumlahbarang));
	}
}

 ?>