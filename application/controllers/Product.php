<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Productos',
			'view' => 'Producto',
			'data_view' => array()
		);
		$this->load->view('Template/main_view', $data);
	}
}
