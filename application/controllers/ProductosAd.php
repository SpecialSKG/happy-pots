<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProductosAd extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_producto');
		$this->load->model('CrudModel');
	}

	public function index()
	{
		if ($this->session->userdata("login") === TRUE) {
			$data = array(
				'page_title' => 'Productos',
				'view' => 'Administracion/ProductosAdmin',
				'data_view' => array(),
				'data' => $this->model_producto->getProductos()
			);
			$this->load->view('Template/main_admin', $data);
		} else {
			redirect(base_url() . 'Login', 'refresh');
		}
	}

	public function insertProd()
	{
		if ($this->session->userdata("login") === TRUE) {
			$data = array(
				'page_title' => 'Productos',
				'view' => 'testform',
				'data_view' => array(),
				'categorias' => $this->CrudModel->mostrar('id','categoria')
			);
			$this->load->view('Template/main_admin', $data);
		} else {
			redirect(base_url() . 'Login', 'refresh');
		}
	}


	public function insertar_producto()
	{
		//traemos la imagen del form
		$imagen = 'img';
		//configuraciones para colocar la imagen en el proyecto
		//ruta donde se va  aguardar
		$config['upload_path'] = "assets/images/productos";
		//archivos permitidos
		$config['allowed_types'] = "jpg|png|jpeg|gif";
		//nombre del archivo
		$config['file_name'] = $_FILES['img']['name'];

		//cargamos las librerua para subir archivo con la cofiguracion que hicimos
		$this->load->library('upload', $config);

		//si se sube la imagen
		if ($this->upload->do_upload($imagen)) {
			//traemos el archivo subido
			$imgloaded = $this->upload->data();
			//array con que se tiene que guardar en la base de datos
			$producto = array(
				'nombre' => $this->input->post('nombre'),
				'descripcion' => $this->input->post('descripcion'),
				'precio' => $this->input->post('precio'),
				//nombre del archivo
				'img_producto_id' => $imgloaded['file_name']
			);
			//intentamos insertar en base de datos y retornamos segun sea el caso
			if ($this->model_producto->insertar_producto($producto)) {
				
				redirect(base_url() . 'Dashboard', 'refresh');
			} else {
				redirect(base_url() . 'Dashboard', 'refresh');
			}
		} else {
			redirect(base_url() . 'Dashboard', 'refresh');
		}
	}

	public function actualizar_producto()
	{
		$producto = array(
			'nombre' => $this->input->post('nombre'),
			'descripcion' => $this->input->post('direccion'),
			'precio' => $this->input->post('precio'),
			//'productocol' => $this->input->post('productocol'),
			'img_producto_id' => $this->input->post('img_producto_id')
		);
		$id = $this->input->post('id');
		$this->model_producto->actualizar_producto($id, $producto);
	}

	public function eliminar_producto($id)
	{
		$this->model_producto->eliminar_producto($id);
	}
	
}
