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
		$this->db->select('p.id, p.nombre, p.descripcion, p.precio, p.img_producto_id, c.nombre');
		$this->db->from('producto as p');
		$this->db->join('categoria as c', 'c.id = p.id_categoria', 'left');
		$this->db->order_by('p.id', 'ASC');
		$result = $this->db->get();
		return $result->result();
	}

	//obtener los datos de 1 usuario
	public function traer_producto($id){
		$this->db->where('id', $id);
		$obt = $this->db->get('producto');
		return ($obt->num_rows() === 1) ? $obt->row(): false;
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
