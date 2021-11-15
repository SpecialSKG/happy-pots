<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_inicio extends CI_Model {

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
}
