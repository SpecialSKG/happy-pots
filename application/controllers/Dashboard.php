<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('DashboardModel');
	}

	public function index()
	{
		if ($this->session->userdata('login') === TRUE) {
			if ($this->session->userdata('tipo') == '1') {
				$data = array(
					'page_title' => 'Dashboard',
					'view' => 'Administracion/Dashboard',
					'data_view' => array(
						'dataDashboard' => $this->DashboardModel->getDashboard(),
						'dataReserva' => $this->DashboardModel->getReservas()
					)
				);
				$this->load->view('Template/main_admin', $data);
			} else if ($this->session->userdata('tipo') == '2') {
				redirect(base_url() . 'DashboardCliente', 'refresh');
			}
		} else {
			redirect(base_url() . 'Login', 'refresh');
		}
	}
}
