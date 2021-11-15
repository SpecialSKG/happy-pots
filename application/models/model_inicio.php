<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_inicio extends CI_Model {

	public function mostrarCategorias(){
		$this->db->order_by('id', 'desc');
		$query=$this->db->get('categoria');
		return $query->result();
	}

	public function mostrarNuevosPots(){
		$this->db->order_by('id', 'desc');
		$this->db->limit(4);
		$query=$this->db->get('producto');
		return $query->result();
	}

	public function insertFormulario($data){
		return ($this->db->insert('formulario', $data)) ? true:false;
	}

	public function getFormulario(){
		$this->db->order_by('id', 'desc');
		$result = $this->db->get('formulario');
		return $result->result();
	}

	public function deleteFormulario($data){
		$this->db->where('id =', $data['id']);
		return ($this->db->delete('formulario')) ? true:false;
	}
}
