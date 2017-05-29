<?php 


/**
* 
*/
class CheckoutController extends CI_Controller
{

	public function __construct() {
		parent::__construct();
	
	}

	//$GLOBALS['arraycheckout'] = array('');

	function index($posisi){
		if ($this->session->userdata('status') != "login as user") {
		$anu = 'checkout';
		}
		else{
		$anu = 'user/usercheckout';
				
		}	

		if ($posisi==1) {
					$class1 = "active";
					$class4="disabled";
					}
				elseif ($posisi==4) {
					$class1 = "";
					$class4="active";
				}
		$cart = $this->cart->contents();
		$totalprice = $this->session->userdata('totalprice');
		$jumlahbarang = count($this->cart->contents());
		$data = $this->CheckoutModel->getData($this->session->userdata('username'));
		$this->load->view($anu, array('jumlahbarang'=> $jumlahbarang, 
										'totalprice'=>$totalprice,
										'data'=>$data,
										'cart' => $cart,
										'class1' => $class1,
										'class4' => $class4));
	}

	function addOrder(){
		$cart = $this->cart->contents();
		if (isset($this->input->post('result'))) {
			$metodepengiriman = $this->input->post('delivery');
			$metodepembayaran = $this->input->post('payment');
			}
		$timestamp = date(Y-m-d H-i-s);
		$username = $this->session->userdata('username');
		$kodepemesanan = (substr($username, 0,2)).(substr($timestamp, 0,3).(substr($timestamp, -3));
		$data = array('kode_pemesanan' => $kodepemesanan,
						'username' => $username,
						'name' => $this->input->post('name'),
					
						'email' => $this->input->post('email'),
						'phone' => $this->input->post('phone'),
						'address' => $this->input->post('address'),
						'city' => $this->input->post('city'),
						'postcode' => $this->input->post('postcode'),
						'country' => $this->input->post('country'),
						'metodepembayaran'=> $metodepembayaran,
						'metodepengiriman' => $metodepengiriman,
						'timestamp' => $timestamp);
		foreach ($cart as $c) {
			
		}
		$this->CheckoutModel->addOrder($data);
	}



}

 ?>