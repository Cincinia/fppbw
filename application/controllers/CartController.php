<?php 

/**
* 
*/
class CartController extends CI_Controller
{
	function index(){
		if ($this->session->userdata('status') != "login as user") {
		$anu = 'cart';
		}
		else{
		$anu = 'user/cart';
		}	
		$jumlahbarang = count($this->cart->contents());
		$data = $this->cart->contents();
		$this->load->view($anu, array('data'=>$data, 'jumlahbarang'=> $jumlahbarang));
	}

	function addToCart(){
		$insert_data = array( 'id' => $this->input->post('id'),
 								'name' => $this->input->post('name'),
 								'price' => $this->input->post('price'),
								'qty' => 1);

 // This function add items into cart.
		$this->cart->insert($insert_data);
		$this->index();
	}

	function remove($rowid){
		if($this->cart->remove($rowid)){
			$this->index();
		}
		else{

		}

	}

	function update(){
		$data= array(
		'rowid' => $this->input->post('rowid'),
		'qty' => $this->input->post('jumlah'));
		
		if($this->cart->update($data)){
			$this->index();
		}
		else{

		}
	}

	function updatetotal($totalprice){
		$this->session->set_userdata('totalprice', $totalprice);
		
		redirect(base_url('CheckoutController/index/1'));
	}
}

 ?>