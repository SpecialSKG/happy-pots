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
		$data['producto'] = $this->Model_inicio->mostrarNuevosPots();
		$this->load->view('Template/main_view', $data);
	}

	public function insertarFormulario(){
		$datos = array(
			'nombrecompleto' => $this->input->post('nombrecompleto'),
			'correoelectronico' => $this->input->post('correoelectronico'),
			'tipoentrega' => $this->input->post('tipoentrega'),
			'telefono' => $this->input->post('telefono'),
			'mensaje' => $this->input->post('mensaje')
		);
		if ($this->Model_inicio->insertFormulario($datos)) {
			redirect(base_url() . 'Inicio', 'refresh');
		} else {
			redirect(base_url() . 'Inicio', 'refresh');
		}
	}
}
