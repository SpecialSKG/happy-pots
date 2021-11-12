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
				'view' => 'Productos/ProductosAdmin',
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
				'view' => 'Productos/InsertProductos',
				'data_view' => array(),
				'categorias' => $this->CrudModel->mostrar('id', 'categoria')
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
				'estado' => $this->input->post('estado'),
				'id_categoria' => $this->input->post('id_categoria'),
				//nombre del archivo
				'img_producto_id' => $imgloaded['file_name']
			);
			//intentamos insertar en base de datos y retornamos segun sea el caso
			if ($this->model_producto->insertar_producto($producto)) {

				redirect(base_url() . 'ProductosAd', 'refresh');
			} else {
				redirect(base_url() . 'Dashboard', 'refresh');
			}
		} else {
			redirect(base_url() . 'Dashboard', 'refresh');
		}
	}

	public function obtenerProducto($id)
	{
		if ($this->session->userdata("login") === TRUE) {
			$data = array(
				'page_title' => 'Detalle Entidad',
				'view' => 'Productos/ProductosUpdate',
				'data_view' => array(),
				'categorias' => $this->CrudModel->mostrar('id', 'categoria'),
				'detalle' => $this->model_producto->traer_producto($id)
			);
			$this->load->view('Template/main_admin', $data);
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
				$id = $this->input->post('id');
				//intentamos insertar en base de datos y retornamos segun sea el caso
				if ($this->model_producto->actualizar_producto($id, $producto)) {
					//redirect(base_url() . 'ProductosAd', 'refresh');
					echo json_encode(array('Nombre de la imagen' => $imgloaded['file_name']));
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

	public function update_product($id)
	{
		$data                              = array();
		$data['product_title']             = $this->input->post('product_title');
		$data['product_short_description'] = $this->input->post('product_short_description');
		$data['product_long_description']  = $this->input->post('product_long_description');
		$data['product_price']             = $this->input->post('product_price');
		$data['product_quantity']          = $this->input->post('product_quantity');
		$data['product_category']          = $this->input->post('product_category');
		$data['product_brand']             = $this->input->post('product_brand');
		$data['product_feature']           = $this->input->post('product_feature');
		$data['publication_status']        = $this->input->post('publication_status');
		$data['product_author']            = $this->session->userdata('user_id');

		$product_delete_image = $this->input->post('product_delete_image');

		$delete_image = substr($product_delete_image, strlen(base_url()));

		$this->form_validation->set_rules('product_title', 'Product Title', 'trim|required');
		$this->form_validation->set_rules('product_short_description', 'Product Short Description', 'trim|required');
		$this->form_validation->set_rules('product_long_description', 'Product Long Status', 'trim|required');
		// $this->form_validation->set_rules('product_image', 'Product Image', 'trim|required');
		$this->form_validation->set_rules('product_price', 'Product Price', 'trim|required');
		$this->form_validation->set_rules('product_quantity', 'Product Quantity', 'trim|required');
		$this->form_validation->set_rules('product_category', 'Product Category', 'trim|required');
		$this->form_validation->set_rules('product_brand', 'Product Brand', 'trim|required');
		$this->form_validation->set_rules('product_feature', 'Product Feature', 'trim');
		$this->form_validation->set_rules('publication_status', 'Publication Status', 'trim|required');

		if (!empty($_FILES['product_image']['name'])) {
			$config['upload_path']   = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']      = 4096;
			$config['max_width']     = 2000;
			$config['max_height']    = 2000;

			$this->upload->initialize($config);

			if (!$this->upload->do_upload('product_image')) {
				$error = $this->upload->display_errors();
				$this->session->set_flashdata('message', $error);
				redirect('add/product');
			} else {
				$post_image            = $this->upload->data();
				$data['product_image'] = $post_image['file_name'];
				unlink($delete_image);
			}
		}
		if ($this->form_validation->run() == true) {

			$result = $this->product_model->update_product_info($data, $id);

			if ($result) {
				$this->session->set_flashdata('message', 'Product Updated Sucessfully');
				redirect('manage/product');
			} else {
				$this->session->set_flashdata('message', 'Product Updated Failed');
				redirect('manage/product');
			}
		} else {
			$this->session->set_flashdata('message', validation_errors());
			redirect('add/product');
		}
	}

	public function eliminar_producto()
	{
		if ($this->input->is_ajax_request()) {
			$data = array('id' => $this->input->post('id'));
			if ($this->model_producto->eliminar_producto($data)) {
				echo json_encode(array('success' => 1));
			} else {
				echo json_encode(array('success' => 0));
			}
		} else {
			echo "no se puede acceder";
		}
	}
}
