<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardCliente extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if ($this->session->userdata("login") === TRUE) {
			$data = array(
				'page_title' => 'Dashboard',
				'view' => 'Administracion/DashboardCliente',
				'data_view' => array()
			);
			$this->load->view('Template/main_admin', $data);
		} else {
			redirect(base_url() . 'Login', 'refresh');
		}
	}
}
