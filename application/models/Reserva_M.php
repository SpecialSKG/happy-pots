<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reserva_M extends CI_Model {

	//Obtener todos los datos de las Reservas
	public function getReservas(){
		$this->db->select('r.id, u.nombre, l.lugar, r.fecha, r.hora');
		$this->db->from('reserva as r');
		$this->db->join('usuario as u', 'u.id = r.usuario', 'left');
		$this->db->join('lugar as l', 'l.id = r.lugar', 'left');
		$this->db->order_by('r.id', 'ASC');
		$result = $this->db->get();
		return $result->result();
	}

	//obtener los datos de 1 perfil de Reserva
	public function obtReservas($id){
		$this->db->where('id', $id);
		$obt = $this->db->get('reserva');
		return ($obt->num_rows() === 1) ? $obt->row(): false;
	}
	
	//obtener los datos de usuarios
	public function getUsuario(){
		$result = $this->db->get('usuario');
		return $result->result();
	}

	//obtener los datos de lugar
	public function getLugar(){
		$result = $this->db->get('lugar');
		return $result->result();
	}

	//borrar 1 reserva
	public function deleteReservas($data){
		$this->db->where('id =', $data['id']);
		return ($this->db->delete('reserva')) ? true:false;
	}

	//insertar los datos de 1 reserva
	public function insertReservas($data){
		return ($this->db->insert('reserva', $data)) ? true:false;
	}

	//actualizar los datos de 1 reserva
	public function updateReservas($data){
		$this->db->where('id', $data['id']);
		return ($this->db->update('reserva', $data)) ? true:false;
	}
	

	/* -------------------------------------------------- */

	

	//actualizar los datos de 1 perfil de usuario
	public function update_perfilDatos($data){
		$this->db->where('id', $data['id']);
		return ($this->db->update('usuario', $data)) ? true:false;
	}

	//actualizar la pass de 1 perfil de usuario
	public function update_perfilPass($data){
		$this->db->where('id', $data['id']);
		return ($this->db->update('usuario', $data)) ? true:false;
	}

	/* -------------------------------------------------- */

}