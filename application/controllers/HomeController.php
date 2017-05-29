<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if ($this->session->userdata('status') != "login as user") {
		$anu = 'home';
		}
		else{
		$anu = 'user/home';
		}	
		$jumlahbarang = count($this->cart->contents());
		$promo = $this->HomeModel->getPromo();
		$product = $this->HomeModel->getBest();
		$custom = $this->HomeModel->getCustom();
		$testimoni = $this->HomeModel->getTestiBest();
		$this->load->view($anu, array('product'=> $product, 'promo' => $promo,
										'testimoni' => $testimoni, 'custom' => $custom, 'jumlahbarang'=>$jumlahbarang));
	}
}
