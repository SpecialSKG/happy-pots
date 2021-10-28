<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DetalleProducto extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Detalle producto',
			'view' => 'producto-detalle',
			'data_view' => array(),
			'activo' => 'active'
		);
		$this->load->view('Template/main_view', $data);
	}
}
