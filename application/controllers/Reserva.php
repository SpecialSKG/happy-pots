<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reserva extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Reserva',
			'view' => 'reserva',
			'data_view' => array(),
			'activo' => 'active'
		);
		$this->load->view('Template/main_view', $data);
	}

}
