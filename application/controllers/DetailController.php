<?php 

/**
* 
*/
class DetailController extends CI_Controller
{
	function index($kode){
		$product = $this->DetailModel->getProduct($kode);
		$custom = $product[0]['custom'];
		$jumlahbarang = count($this->cart->contents());
		if ($custom == 0) {
			$classre="active";
			$class="";
			$classcust="";
			$status="reguler";
		}
		else{
			$classre="";
			$class="";
			$status="custom";
			$classcust="active";
		}
		if ($this->session->userdata('status') != "login as user") {
		$anu = 'detail';
		}
		else{
		$anu = 'user/detail';
		}
		$this->load->view($anu, array('product'=> $product,
											'status'=>$status,
											'class'=>$class,
											'classre'=> $classre,
											'classcust' => $classcust,
											'jumlahbarang'=> $jumlahbarang));
	}
}

 ?>