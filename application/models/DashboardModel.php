<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardModel extends CI_Model {

    public function getDashboard(){
        $query = $this->db->get('V_DASHBOARD');
        $data = $query->row();
        return $data;
    }

    public function getReservas(){
		$this->db->select('r.id, u.nombre, l.lugar, r.fecha, r.hora');
		$this->db->from('reserva as r');
		$this->db->join('usuario as u', 'u.id = r.usuario', 'left');
		$this->db->join('lugar as l', 'l.id = r.lugar', 'left');
		$this->db->order_by('r.fecha', 'ASC');
        //$this->db->where('r.fecha', date("Y-m"));
		$result = $this->db->get();
		return $result->result();
	}
}