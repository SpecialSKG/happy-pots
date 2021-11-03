<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudModel extends CI_Model{

    public function __construct()
    {
        Parent:: __construct();
    }

    public function insertar($tabla, $item){
        $flag = false;
        try {
            if($this->db->insert($tabla, $item)){
            $flag = true;
        }
        } catch (Exception $e) {
            echo $e;
        }
        
        return $flag;
    }

    public function actualizar($id, $nombreCampoId, $tabla, $item){
        $flag = false;
        try {
            $this->db->where($nombreCampoId, $id);
            if ($this->db->update($tabla, $item)) {
                $flag = true;
            }else{
                echo "error al actualizar";    
            }

        } catch (Exception $error) {
            var_dump($error->getMessage());
        }
        return $flag;
    }

    public function eliminar($id, $nombreCampoId , $tabla){
        $flag = false;
        $this->db->where($nombreCampoId,$id);
        if ($this->db->delete($tabla)) {

        }
        return $flag;
    }
    
    public function mostrar($nombreCampoId, $tabla){
        $this->db->order_by($nombreCampoId, "desc");
        $query = $this->db->get($tabla);
        return $query->result();
    }

    public function mostrarById($id, $nombreCampoId, $tabla){
        $this->db->where($nombreCampoId, $id);
        $query=$this->db->get($tabla);
        return $query->row();
    }

    public function listarWhereQuery($tabla, $where){
        $sql = $this->db->query("SELECT * FROM ".$tabla." where ".$where);
        return $sql->result();
    }

}