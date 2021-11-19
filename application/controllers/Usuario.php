<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usuario_M');
	}

	public function index()
	{
		if ($this->session->userdata('login') === TRUE) {
			if ($this->session->userdata('tipo') == '1') {
				$data = array(
					'page_title' => 'Usuario',
					'view' => 'Usuarios/Usuario',
					'data_view' => array(),
					'data' => $this->Usuario_M->getUsuarios()
				);
				$this->load->view('Template/main_admin', $data);
			} else if ($this->session->userdata('tipo') == '2') {
				redirect(base_url() . 'DashboardCliente', 'refresh');
			}
		} else {
			redirect(base_url() . 'Login', 'refresh');
		}
	}

	public function ins_Usuario()
	{
		if ($this->session->userdata('login') === TRUE) {
			if ($this->session->userdata('tipo') == '1') {
				$data = array(
					'page_title' => 'Usuario',
					'view' => 'Usuarios/UsuarioInsert',
					'data_view' => array(),
					'data' => $this->Usuario_M->getUsuarios()
				);
				$this->load->view('Template/main_admin', $data);
			} else if ($this->session->userdata('tipo') == '2') {
				redirect(base_url() . 'DashboardCliente', 'refresh');
			}
		} else {
			redirect(base_url() . 'Login', 'refresh');
		}
	}

	//obtener datos de 1 usuario
	public function obtenerUsuario($id)
	{
		if ($this->session->userdata('login') === TRUE) {
			if ($this->session->userdata('tipo') == '1') {
				$data = array(
					'page_title' => 'Detalle Entidad',
					'view' => 'Usuarios/UsuarioUpdate',
					'data_view' => array(),
					'detalle' => $this->Usuario_M->obtUsuario($id)
				);
				$this->load->view('Template/main_admin', $data);
			} else if ($this->session->userdata('tipo') == '2') {
				redirect(base_url() . 'DashboardCliente', 'refresh');
			}
		} else {
			redirect(base_url() . 'Login', 'refresh');
		}
	}

	//Insertar datos de 1 usuario
	public function insertarUsuario()
	{
		if ($this->session->userdata('login') === TRUE) {
			if ($this->session->userdata('tipo') == '1') {
				if ($this->input->is_ajax_request()) {
					$data = array(
						'nombre' => $this->input->post('nombre'),
						'cell' => $this->input->post('cell'),
						'email' => $this->input->post('email'),
						'pass' => base64_encode($this->input->post('pass')),
						'tipo' => $this->input->post('tipo')
					);
					if ($this->Usuario_M->insertUsuario($data)) {
						echo json_encode(array('success' => 1));
					} else {
						echo json_encode(array('success' => 0));
					}
				} else {
					echo "no se puede acceder";
				}
			} else if ($this->session->userdata('tipo') == '2') {
				redirect(base_url() . 'DashboardCliente', 'refresh');
			}
		} else {
			redirect(base_url() . 'Login', 'refresh');
		}
	}

	//actualizar datos de 1 usuario
	public function actualizarUsuario()
	{
		if ($this->session->userdata('login') === TRUE) {
			if ($this->session->userdata('tipo') == '1') {
				if ($this->input->is_ajax_request()) {
					$data = array(
						'nombre' => $this->input->post('nombre'),
						'cell' => $this->input->post('cell'),
						'email' => $this->input->post('email'),
						'pass' => base64_encode($this->input->post('pass')),
						'tipo' => $this->input->post('tipo'),
						'id' => $this->input->post('id')
					);
					if ($this->Usuario_M->updateUsuario($data)) {
						echo json_encode(array('success' => 1));
					} else {
						echo json_encode(array('success' => 0));
					}
				} else {
					echo "no se puede acceder";
				}
			} else if ($this->session->userdata('tipo') == '2') {
				redirect(base_url() . 'DashboardCliente', 'refresh');
			}
		} else {
			redirect(base_url() . 'Login', 'refresh');
		}
	}

	//borrar 1 usuario
	public function borrarUsuario()
	{
		if ($this->session->userdata('login') === TRUE) {
			if ($this->session->userdata('tipo') == '1') {
				if ($this->input->is_ajax_request()) {
					$data = array('id' => $this->input->post('id'));
					if ($this->Usuario_M->deleteUsuarios($data)) {
						echo json_encode(array('success' => 1));
					} else {
						echo json_encode(array('success' => 0));
					}
				} else {
					echo "no se puede acceder";
				}
			} else if ($this->session->userdata('tipo') == '2') {
				redirect(base_url() . 'DashboardCliente', 'refresh');
			}
		} else {
			redirect(base_url() . 'Login', 'refresh');
		}
	}

	/*---------------------------------------------------------------------*/

	//obtener datos de 1 perfil de usuario
	public function obtPerfil($id)
	{
		if ($this->session->userdata("login") === TRUE) {
			$data = array(
				'page_title' => 'Datos Perfil',
				'view' => 'Usuarios/UsuarioPerfil',
				'data_view' => array(),
				'Perfil' => $this->Usuario_M->obtPerfil($this->session->userdata("id"))
			);
			$this->load->view('Template/main_admin', $data);
		} else {
			redirect(base_url() . 'Login', 'refresh');
		}
	}

	//actualizar los datos de 1 perfil de usuario
	public function update_perfilDatos()
	{
		if ($this->session->userdata('login') === TRUE) {
			if ($this->input->is_ajax_request()) {
				$data = array(
					'nombre' => $this->input->post('nombre'),
					'cell' => $this->input->post('cell'),
					'email' => $this->input->post('email'),
					'id' => $this->input->post('id')
				);

				if ($this->Usuario_M->update_perfilDatos($data)) {
					$session_data = array(
						'id' => $data['id'],
						'nombre' => $data['nombre'],
						'email' => $data['email'],
						'pass' => $this->session->userdata('pass'),
						'login' => TRUE,
						'tipo' => $this->session->userdata('tipo')
					);
					$this->session->set_userdata($session_data);
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

	public function update_perfilPass()
	{
		if ($this->session->userdata('login') === TRUE) {
			if ($this->input->is_ajax_request()) {
				$data = array(
					'pass' => base64_encode($this->input->post('pass')),
					'id' => $this->input->post('id')
				);
				if ($this->entidades_model->update_perfilPass($data)) {
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
