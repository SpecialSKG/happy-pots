<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Dashboard',
			'view' => 'Administracion\Dashboard',
			'data_view' => array(),
			'activo' => 'active'
		);
		$this->load->view('Template2/main_view', $data);
	}
}