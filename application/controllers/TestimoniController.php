<?php 

/**
* 
*/
class TestimoniController extends CI_Controller
{
	
	function index(){
		if ($this->session->userdata('status') != "login as user") {
		$anu = 'testimoni';
		}
		else{
		$anu = 'user/testimoni';
		}	
		$jumlahbarang = count($this->cart->contents());
		$testimoni = $this->TestimoniModel->getTestimoni();
		$this->load->view($anu, array('testimoni'=> $testimoni, 'jumlahbarang'=>$jumlahbarang));
	}

	function createTesti(){
			$name = $this->input->post('firstname'). ' '. $this->input->post('lastname');
			$data = array(
			'name' => $name,
			'email' => $this->input->post('email'),
			'poin' => $this->input->post('poin'),
			'pesan' => $this->input->post('pesan'),
			'timestamp' => date("Y-m-d H:i:s")
			);
		$this->TestimoniModel->createTestimoni($data);
		$this->index();
	}
}

 ?>