<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reservas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Reserva_M');
	}

	public function index()
	{
		if ($this->session->userdata("login") === TRUE) {
			$data = array(
				'page_title' => 'Reservas',
				'view' => 'Reservas/Reserva',
				'data_view' => array(),
				'data' => $this->Reserva_M->getReservas()
			);
			$this->load->view('Template/main_admin', $data);
		} else {
			redirect(base_url() . 'Login', 'refresh');
		}
	}

	//ingresar una reserva
	public function ins_Reserva()
	{
		if ($this->session->userdata("login") === TRUE) {
			$data = array(
				'page_title' => 'Reservas',
				'view' => 'Reservas/ReservaInsert',
				'data_view' => array(),
				'usuario' => $this->Reserva_M->getUsuario(),
				'lugar' => $this->Reserva_M->getLugar()
			);
			$this->load->view('Template/main_admin', $data);
		} else {
			redirect(base_url() . 'Login', 'refresh');
		}
	}

	//Insertar datos de 1 usuario
	public function insertarReserva()
	{
		if ($this->input->is_ajax_request()) {
			$data = array(
				'usuario' => $this->input->post('usuario'),
				'lugar' => $this->input->post('lugar'),
				'fecha' => $this->input->post('fecha'),
				'hora' => $this->input->post('hora')
			);
			if ($this->Reserva_M->insertReservas($data)) {
				echo json_encode(array('success' => 1));
			} else {
				echo json_encode(array('success' => 0));
			}
		} else {
			echo "no se puede acceder";
		}
	}

	//obtener datos de 1 usuario
	public function obtenerReserva($id)
	{
		if ($this->session->userdata("login") === TRUE) {
			$data = array(
				'page_title' => 'Detalle Reserva',
				'view' => 'Reservas/ReservaUpdate',
				'data_view' => array(),
				'usuario' => $this->Reserva_M->getUsuario(),
				'lugar' => $this->Reserva_M->getLugar(),
				'detalle' => $this->Reserva_M->obtReservas($id)
			);
			$this->load->view('Template/main_admin', $data);
		} else {
			redirect(base_url() . 'Login', 'refresh');
		}
	}

	//actualizar datos de 1 usuario
	public function actualizarReserva()
	{
		if ($this->input->is_ajax_request()) {
			$data = array(
				'usuario' => $this->input->post('usuario'),
				'lugar' => $this->input->post('lugar'),
				'fecha' => $this->input->post('fecha'),
				'hora' => $this->input->post('hora'),
				'id' => $this->input->post('id')
			);
			if ($this->Reserva_M->updateReservas($data)) {
				echo json_encode(array('success' => 1));
			} else {
				echo json_encode(array('success' => 0));
			}
		} else {
			echo "no se puede acceder";
		}
	}

	//borrar 1 Reserva
	public function borrarReserva()
	{
		if ($this->input->is_ajax_request()) {
			$data = array('id' => $this->input->post('id'));
			if ($this->Reserva_M->deleteReservas($data)) {
				echo json_encode(array('success' => 1));
			} else {
				echo json_encode(array('success' => 0));
			}
		} else {
			echo "no se puede acceder";
		}
	}

	///////////////////////////////////////////////

	//obtener datos de 1 usuario
	public function obtenerReservaPerfil($id)
	{
		if ($this->session->userdata("login") === TRUE) {
			$data = array(
				'page_title' => 'Detalle Reserva',
				'view' => 'Reservas/ReservaPerfil',
				'data_view' => array(),
				'usuario' => $this->Reserva_M->getUsuario(),
				'lugar' => $this->Reserva_M->getLugar(),
				'detalle' => $this->Reserva_M->obtReservas($id)
			);
			$this->load->view('Template/main_admin', $data);
		} else {
			redirect(base_url() . 'Login', 'refresh');
		}
	}
}
