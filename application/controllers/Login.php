<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_M');
		$this->load->library(array('session', 'form_validation'));
		$this->load->helper(array('url'));
	}
	public function index()
	{
		if ($this->session->userdata('login') === TRUE) {
			redirect(base_url() . 'Dashboard', 'refresh');
		} else {
			$this->load->view('Login');
		}
	}
	public function iniciar_sesion()
	{
		$email = $this->input->post('email');
		$pass = base64_encode($this->input->post('pass'));
		//$pass = $this->input->post('pass');
		$res = $this->Login_M->login($email, $pass);

		if ($res->num_rows() > 0) {

			$data  = $res->row_array();
			$session_data = array(
				'id' => $data['id'],
				'nombre' => $data['nombre'],
				'email' => $data['email'],
				'pass' => $data['pass'],
				'login' => TRUE,
				'tipo' => $data['tipo']
			);
			$this->session->set_userdata($session_data);

			if ($data['tipo'] == '1') {
				redirect(base_url() . 'Dashboard', 'refresh');
			} else if ($data['tipo'] == '2') {
				redirect(base_url(), 'refresh');
			}
		} else {
			redirect(base_url() . 'Dashboard', 'refresh');
		}
	}

	public function cerrar_sesion()
	{
		$this->session->sess_destroy();
		redirect(base_url() . 'Login', 'refresh');
	}
}
