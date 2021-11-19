<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ProductoModel');
		$this->load->model('CrudModel');
	}

	public function index($pagina = FALSE)
	{

		$inicio = 0;
		$limite = 4;

		if($pagina){
			$inicio = ($pagina - 1) * $limite;
		}
		$data = array(
			'page_title' => 'Productos',
			'view' => 'Producto',
			'data_view' => array(),
			'activo' => 'active'
			);
		$this->load->model('ProductoModel');
		$data['producto'] = $this->ProductoModel->mostrar_producto_activo($inicio,$limite);

		/*pagination*/
		$this->load->library('pagination');
		$config['base_url'] = base_url().'product/pagina/';
		$config['total_rows'] = count($this->ProductoModel->mostrar_producto_activo());
		$config['per_page'] = $limite;
		$config['first_url'] = base_url().'product';
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';
		$config['first_link'] = '&lsaquo;&lsaquo; Primero';
		$config['last_link'] = 'Último &rsaquo;&rsaquo;';
		$config['next_link'] = 'Siguiente &gt;';
		$config['prev_link'] = '&lt; Anterior';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item"><strong>';
		$config['cur_tag_close'] = '</strong></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);
		/*end pagination*/

		
		if($this->uri->segment(3)!='')
		{
			$id=$this->uri->segment(3);
			$data['producto_actualizar'] = $this->ProductoModel->traer_producto($id);
		}
		/*
		$data = array(
			'page_title' => 'Productos',
			'view' => 'Producto',
			'data_view' => array(
				'productos' => $this->ProductoModel->mostrar_producto()
			),
			'activo' => 'active'
		);*/
		
		$this->load->view('Template/main_view', $data);
	}

	public function maceta()
	{
		if ($this->uri->segment(3) != '') {
			$data = array(
				'page_title' => 'Productos',
				'view' => 'producto-detalle',
				'data_view' => array(
					'producto' => $this->ProductoModel->traer_producto($this->uri->segment(3))
				),
				'activo' => 'active'
			);
			$this->load->view('Template/main_view', $data);
		}
	}

	/*public function goToInsert()
	{
		$this->load->model('CrudModel');
		$data = array(
			'page_title' => 'Productos',
			'view' => 'Administracion/ProductosAdmin',
			'data_view' => array(),
			'activo' => 'active'
		);
		$this->load->view('Template/main_view',$data);
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
				'id_categoria' => $this->input->post('categoria'),
				//nombre del archivo
				'img_producto_id' => $imgloaded['file_name']
			);
			//intentamos insertar en base de datos y retornamos segun sea el caso
			if ($this->ProductoModel->insertar_producto($producto)) {
				echo json_encode(array('status' => 1, 'message' => "Producto Insertado"));
			} else {
				echo json_encode(array('status' => 0, 'message' => "Error al insertar el producto"));
			}
		} else {
			echo json_encode(array('status' => 1, 'message' => "solo se adminte guardar imagenes con extensiones: jpg, png, jpeg, gif"));
		}
	}

	public function actualizar_producto()
	{
		$producto = array(
			'nombre' => $this->input->post('nombre'),
			'descripcion' => $this->input->post('direccion'),
			'precio' => $this->input->post('precio'),
			'productocol' => $this->input->post('productocol'),
			'img_producto_id' => $this->input->post('img_producto_id')
		);
		$id = $this->input->post('id');
		$this->ProductoModel->actualizar_producto($id, $producto);
	}

	public function eliminar_producto($id)
	{
		$this->ProductoModel->eliminar_producto($id);
	}*/

	public function insertarDetalleTemp()
	{
		if ($this->session->userdata('login')) {

			if ($this->input->post('cantidad') == "" || $this->input->post('cantidad') <= 0) {
				echo json_encode(array('result' => 0, 'message' => "La cantidad de macetas tiene que ser mayor a 0"));
			} else {
				$item = array(
					'usuario' => $this->session->userdata('id'),
					'producto' => $this->input->post('producto'),
					'material' => $this->input->post('material'),
					'cantidad' => $this->input->post('cantidad'),
				);

				$this->load->model("CrudModel");
				if ($this->CrudModel->insertar("detalle_temp", $item)) {
					echo json_encode(array('result' => 1, 'message' => "Añadido"));
				} else {
					echo json_encode(array('result' => 1, 'message' => "Error al añadir al carrito"));
				}
			}
		} else {
			echo json_encode(array('result' => 0, 'message' => 'no esta logeado'));
		}
	}

	
}
