<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inicio extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_inicio');
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Happy Pots',
			'view' => 'Bienvenida',
			'data_view' => array(),
			'activo' => 'active'
		);
		$data['producto'] = $this->model_inicio->mostrarNuevosPots();
		$this->load->view('Template/main_view', $data);
	}
}
