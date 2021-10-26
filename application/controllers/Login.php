<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Login_M');
	}
	public function index(){
		if($this->session->userdata('login')){
			redirect(base_url().'Dashboard');
		}else{
			$this->load->view('Login');
		}
	}
	public function iniciar_sesion(){
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		$res = $this->Login_M->login($email, $pass);

		if(!$res){
			redirect(base_url().'Dashboard');
		}else{
			$data = array(
				'id' => $res->id,
				'email' => $res->email,
				'pass' => $res->pass,
				'login' => TRUE,
				'rol_' => $res->rol_
			);
			$this->session->set_userdata($data);
			redirect(base_url().'Dashboard');
		}
	}
	public function cerrar_sesion(){
		$this->session->sess_destroy();


		redirect(base_url());
	}
}
