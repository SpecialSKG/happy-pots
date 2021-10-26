<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_M extends CI_Model {
	public function login($email,$pass){
		$this->db->where("email	",$email);
		$this->db->where("pass",$pass);

		$resultados = $this->db->get("usuario");
		if($resultados->num_rows() > 0){
			return $resultados->row();
		}else{
			return false;
		}
	}	
}