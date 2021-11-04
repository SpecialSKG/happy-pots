<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_detalle_producto extends CI_Model {

	public function mostrar_producto()
	{
		$this->db->order_by('id');
		$query=$this->db->get('producto');

		return $query->result();
	}

	public function traer_producto($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('producto');

		return $query->row();
	}
}
