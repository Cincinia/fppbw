<?php 
class LoginController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('LoginModel');
	}
	
	function index() {
		$this->load->view('loginfix');
	}
	
	function register(){
		$data = array(
			
			'username' => $this->input->post('username'),
			'password' => $this->input->post('pass'),
			'name' => $this->input->post('name'),
			'phone' => $this->input->post('phone'),
			'address' => $this->input->post('address'),
			'email' => $this->input->post('email'),
			'city' => $this->input->post('city'),
			'country' => $this->input->post('country'),
			'postcode' => $this->input->post('postcode')
		);
		$this->LoginModel->addAcc($data);
		redirect(base_url('HomeController'));
	}
	function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$data = $this->LoginModel->getData($username, $password);
		
		$isLogin = $this->LoginModel->login_authen($username, $password);
		$iyalogin = $isLogin->result_array();

		if ($isLogin->num_rows() > 0 && $iyalogin[0]['role']==0) {
			$data_session = array(
							'username' => $username,
							'email' => $data[0]['email'],
							'phone' => $data[0]['phone'],
							'address' => $data[0]['address'],
							'city' => $data[0]['city'],
							'country' => $data[0]['country'],
							'postcode' => $data[0]['postcode'],
							'name' => $data[0]['name'],
							'password' => $data[0]['password'],
							'status' => "login as user");
			$this->session->set_userdata($data_session);
			redirect(base_url("HomeController"));
		}
		elseif ($isLogin->num_rows() > 0 && $iyalogin[0]['role']==1) {
			$data_session = array(
							'username' => $username,
							'email' => $data[0]['email'],
							'phone' => $data[0]['phone'],
							'address' => $data[0]['address'],
							'name' => $data[0]['name'],
							'password' => $data[0]['password'],
							'status' => "login");
			$this->session->set_userdata($data_session);
			redirect(base_url("./../olshopadmin/index.php/Admin"));
		}
		else{
			echo "username dan password salah";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('HomeController'));
	}

}
?>