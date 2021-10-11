<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inicio extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Happy Pots',
			'view' => 'Bienvenida',
			'data_view' => array()
		);
		$this->load->view('Template/main_view', $data);
	}
}
