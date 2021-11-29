<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inicio extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('InicioModel');
	}

	public function index()
	{
		$data = array(
			'page_title' => 'Happy Pots',
			'view' => 'Bienvenida',
			'data_view' => array(),
			'activo' => 'active',
			'producto' => $this->InicioModel->mostrarNuevosPots(),
			'categoria' => $this->InicioModel->mostrarCategorias()
		);
		$this->load->view('Template/main_view', $data);
	}

	public function insertarFormulario()
	{
		if ($this->input->is_ajax_request()) {
			$data = array(
				'nombrecompleto' => $this->input->post('nombrecompleto'),
				'correoelectronico' => $this->input->post('correoelectronico'),
				'tipoentrega' => $this->input->post('tipoentrega'),
				'telefono' => $this->input->post('telefono'),
				'mensaje' => $this->input->post('mensaje')
			);
			if ($this->InicioModel->insertFormulario($data)) {
				echo json_encode(array('success' => 1));
			} else {
				echo json_encode(array('success' => 0));
			}
		} else {
			echo "no se puede acceder";
		}
	}
}
