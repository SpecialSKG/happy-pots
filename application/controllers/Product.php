<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_producto');
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

		$data['producto'] = $this->model_producto->mostrar_producto($inicio,$limite);

		/*pagination*/
		$this->load->library('pagination');
		$config['base_url'] = base_url().'product/pagina/';
		$config['total_rows'] = count($this->model_producto->mostrar_producto());
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
			$data['producto_actualizar'] = $this->model_producto->traer_producto($id);
		}
		$this->load->view('Template/main_view',$data);
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

