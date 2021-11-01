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
			'data_view' => array(),
			'activo' => 'active'
		);
		$this->load->view('Template/main_view', $data);
	}

	public function insertar_producto()
	{
		$producto=array(
			'nombre'=>$this->input->post('nombre'),
			'descripcion'=>$this->input->post('direccion'),
			'precio'=>$this->input->post('precio'),
			'productocol'=>$this->input->post('productocol'),
			'img_producto_id'=>$this->input->post('img_producto_id')
		);
		$this->load->model('model_producto');
		$this->model_producto->insertar_producto($producto);
		
		redirect('Control');
	}

	public function actualizar_producto()
	{
		$producto=array(
			'nombre'=>$this->input->post('nombre'),
			'descripcion'=>$this->input->post('direccion'),
			'precio'=>$this->input->post('precio'),
			'productocol'=>$this->input->post('productocol'),
			'img_producto_id'=>$this->input->post('img_producto_id')
		);
		$id=$this->input->post('id');
		$this->load->model('model_producto');
		$this->model_producto->actualizar_producto($id,$producto);
		redirect('Control');
	}

	public function eliminar_producto($id){
		$this->load->model('model_producto');
		$this->model_producto->eliminar_producto($id);

		redirect('Control');
	}
}

