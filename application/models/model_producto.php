<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_producto extends CI_Model {

	public function insertar_producto($producto)
	{
		if($this->db->insert('producto',$producto))
			return true;
		else
			return false;
	}

	public function mostrar_producto($inicio = FALSE, $limite = FALSE)
	{
		$this->db->order_by('id', 'asc');
		if($inicio !== FALSE && $limite !== FALSE){
			$this->db->limit($limite,$inicio);
		}
		$query=$this->db->get('producto');

		return $query->result();
	}

		//Obtener todos los datos de los productos
	public function getProductos(){
		$this->db->select('*');
		$this->db->from('producto');
		$this->db->order_by('id', 'ASC');
		$result = $this->db->get();
		return $result->result();
	}

	public function traer_producto($id)
	{
		$this->db->where('id',$id);
		$query=$this->db->get('producto');

		return $query->row();
	}

	public function actualizar_producto($id, $producto)
	{
		$this->db->where('id=',$id);
		if($this->db->update('producto',$producto))
			return true;
		else
			return false;
	}

	public function eliminar_producto($id)
	{
		$this->db->where('id',$id);
		return($this->db->delete('producto'))? true:false;
	}
}
