<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProductosAd extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ProductoModel');
		$this->load->model('CrudModel');
	}

	public function index()
	{
		if ($this->session->userdata('login') === TRUE) {
			if ($this->session->userdata('tipo') == '1') {
				$data = array(
					'page_title' => 'Productos',
					'view' => 'Productos/ProductosAdmin',
					'data_view' => array(),
					'data' => $this->ProductoModel->getProductos()
				);
				$this->load->view('Template/main_admin', $data);
			} else if ($this->session->userdata('tipo') == '2') {
				redirect(base_url() . 'DashboardCliente', 'refresh');
			}
		} else {
			redirect(base_url() . 'Login', 'refresh');
		}
	}

	public function insertProd()
	{
		if ($this->session->userdata('login') === TRUE) {
			if ($this->session->userdata('tipo') == '1') {
				$data = array(
					'page_title' => 'Productos',
					'view' => 'Productos/InsertProductos',
					'data_view' => array(),
					'categorias' => $this->CrudModel->mostrar('id', 'categoria')
				);
				$this->load->view('Template/main_admin', $data);
			} else if ($this->session->userdata('tipo') == '2') {
				redirect(base_url() . 'DashboardCliente', 'refresh');
			}
		} else {
			redirect(base_url() . 'Login', 'refresh');
		}
	}


	public function insertar_producto()
	{
		if ($this->session->userdata('login') === TRUE) {
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
					'estado' => $this->input->post('estado'),
					'id_categoria' => $this->input->post('id_categoria'),
					//nombre del archivo
					'img_producto_id' => $imgloaded['file_name']
				);
				//intentamos insertar en base de datos y retornamos segun sea el caso
				if ($this->ProductoModel->insertar_producto($producto)) {
					redirect(base_url() . 'ProductosAd', 'refresh');
				} else {
					redirect(base_url() . 'Dashboard', 'refresh');
				}
			} else {
				redirect(base_url() . 'Dashboard', 'refresh');
			}
		} else {
			redirect(base_url() . 'Login', 'refresh');
		}
	}

	public function obtenerProducto($id)
	{
		if ($this->session->userdata('login') === TRUE) {
			if ($this->session->userdata('tipo') == '1') {
				$data = array(
					'page_title' => 'Detalle Productos',
					'view' => 'Productos/ProductosUpdate',
					'data_view' => array(),
					'categorias' => $this->CrudModel->mostrar('id', 'categoria'),
					'detalle' => $this->ProductoModel->traer_producto($id)
				);
				$this->load->view('Template/main_admin', $data);
			} else if ($this->session->userdata('tipo') == '2') {
				redirect(base_url() . 'DashboardCliente', 'refresh');
			}
		} else {
			redirect(base_url() . 'Login', 'refresh');
		}
	}

	public function actualizar_producto()
	{
		if ($this->session->userdata("login") === TRUE) {
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
			if ($this->upload->do_upload($imagen)) {
				//traemos el archivo subido
				$imgloaded = $this->upload->data('file_name');
				$imgold = $this->input->post('old_img');
				if ($imgold != 'missing_img.jpg') {
					unlink('./assets/images/productos/' . $imgold);
				}
				//array con que se tiene que guardar en la base de datos
				$producto = array(
					'nombre' => $this->input->post('nombre'),
					'descripcion' => $this->input->post('descripcion'),
					'precio' => $this->input->post('precio'),
					'img_producto_id' => $imgloaded,
					'id_categoria' => $this->input->post('id_categoria'),
					'estado' => $this->input->post('estado')
				);
			} else {
				$producto = array(
					'nombre' => $this->input->post('nombre'),
					'descripcion' => $this->input->post('descripcion'),
					'precio' => $this->input->post('precio'),
					'id_categoria' => $this->input->post('id_categoria'),
					'estado' => $this->input->post('estado')
				);
			}
			$id = $this->input->post('id');
			if ($this->ProductoModel->actualizar_producto($id, $producto)) {
				redirect(base_url() . 'ProductosAd', 'refresh');
			} else {
				redirect(base_url() . 'Dashboard', 'refresh');
			}
		} else {
			redirect(base_url() . 'Login', 'refresh');
		}
	}

	public function eliminar_producto()
	{
		if ($this->session->userdata('login') === TRUE) {
			if ($this->input->is_ajax_request()) {
				$data = array('id' => $this->input->post('id'));
				$img = $this->input->post('img');
				if ($img != 'missing_img.jpg') {
					unlink('./assets/images/productos/' . $img);
				}
				if ($this->ProductoModel->eliminar_producto($data)) {
					echo json_encode(array('success' => 1));
				} else {
					echo json_encode(array('success' => 0));
				}
			} else {
				echo "no se puede acceder";
			}
		} else {
			redirect(base_url() . 'Login', 'refresh');
		}
	}
}
