<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_M extends CI_Model {

	//Obtener todos los datos de los usuarios
	public function getUsuarios(){
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->order_by('id', 'ASC');
		$result = $this->db->get();
		return $result->result();
	}
	
	//borrar 1 usuario
	public function deleteUsuarios($data){
		$this->db->where('id =', $data['id']);
		return ($this->db->delete('usuario')) ? true:false;
	}

	//obtener los datos de 1 usuario
	public function obtUsuario($id){
		$this->db->where('id', $id);
		$obt = $this->db->get('usuario');
		return ($obt->num_rows() === 1) ? $obt->row(): false;
	}

	//insertar los datos de 1 usuario
	public function insertUsuario($data){
		return ($this->db->insert('usuario', $data)) ? true:false;
	}

	//actualizar los datos de 1 usuario
	public function updateUsuario($data){
		$this->db->where('id', $data['id']);
		return ($this->db->update('usuario', $data)) ? true:false;
	}

	/* -------------------------------------------------- */

	//obtener los datos de 1 perfil de usuario
	public function obtPerfil($id){
		$this->db->where('id', $id);
		$obt = $this->db->get('usuario');
		return ($obt->num_rows() === 1) ? $obt->row(): false;
	}

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