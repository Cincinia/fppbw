<?php 

/**
* 
*/
class ProfileController extends CI_Controller
{
	function index(){
		$data = $this->ProfileModel->getData($this->session->userdata('username'));
		$jumlahbarang = count($this->cart->contents());
		$this->load->view('user/profile', array('jumlahbarang'=> $jumlahbarang, 'data'=>$data));
	}

	public function update($username){
 			$data = array(
			'name' => $this->input->post('name'),
			'address' => $this->input->post('address'),
			'city' => $this->input->post('city'),
			'country' => $this->input->post('country'),
			'postcode' => $this->input->post('postcode'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			);
 			$this->ProfileModel->updateData($username, $data);
 			$this->index();
 	}

 	function updatePassword(){
 		$username = $this->session->userdata('username');
 		$newpassword = $this->input->post('password_1');
 		$this->ProfileModel->updatePassword($username, $newpassword);
 		$this->index();
 	}
}

 ?>