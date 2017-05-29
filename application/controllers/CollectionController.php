<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CollectionController extends CI_Controller {

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
		$status = 'All Item';

		$jumlahbarang = count($this->cart->contents());
		$class = 'active';
		$classre = '';
		$classcust= '';
		$product = $this->CollectionModel->getAll();
		$custom = $this->CollectionModel->getCustom();
		$jumlahAll = count($product);
		$jumlahCustom = count($custom);
		$jumlahReguler = count($this->CollectionModel->getReguler());
		if ($this->session->userdata('status') != "login as user") {
		$anu = 'collection';
		}
		else{
		$anu = 'user/collection';
		}	
		$this->load->view($anu, array('product'=> $product, 'custom' => $custom,
												'status' => $status, 
												'class'=>$class, 
												'classre'=> $classre, 
												'classcust'  => $classcust,
												'jumlahAll' => $jumlahAll,
												'jumlahReguler' => $jumlahReguler,
												'jumlahCustom'=> $jumlahCustom,
												'jumlahbarang' => $jumlahbarang));
	}

	public function indexto($kategori){
		if ($kategori=='reguler') {
			$product = $this->CollectionModel->getReguler();
			$class = '';
			$classre = 'active';
			$classcust= '';
		}
		elseif ($kategori=='custom') {
			$product = $this->CollectionModel->getCustom();
			$class = '';
			$classre = '';
			$classcust= 'active';
		}
		else{
			$customtidakya = strpos($kategori, "ust");
			if ($customtidakya == FALSE ) {
			$class = '';
			$classre = 'active';
			$classcust= '';
			$product = $this->CollectionModel->getProduct($kategori);
			}
			else{
			$product = $this->CollectionModel->getProduct($kategori);
			$class = '';
			$classre = '';
			$classcust= 'active';
			}		
		}
		
		
		$status = $kategori;
		$jumlahbarang = count($this->cart->contents());
		$jumlahAll = count($this->CollectionModel->getAll());
		$jumlahCustom = count($this->CollectionModel->getCustom());
		$jumlahReguler = count($this->CollectionModel->getReguler());
		if ($this->session->userdata('status') != "login as user") {
		$anu = 'collection';
		}
		else{
		$anu = 'user/collection';
		}
		$this->load->view($anu, array('product' => $product, 
												'status'=>$status,
												'class'=>$class, 
												'classre'=> $classre, 
												'classcust'  => $classcust,
												'jumlahAll' => $jumlahAll,
												'jumlahReguler' => $jumlahReguler,
												'jumlahCustom'=> $jumlahCustom,
												'jumlahbarang' => $jumlahbarang));
	}
}
