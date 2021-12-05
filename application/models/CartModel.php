<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CartModel extends CI_Model
{
    public function executeInsert($item)
    {
        //echo($item->id.", ".$item->lugar.", '".$item->fecha."', '".$item->hora."', ".$item->total);
        $query = $this->db->query("call insertar_reserva(" . $item->id . ", " . $item->lugar . ", '" . $item->fecha . "', '" . $item->hora . "', " . $item->total . ");");
    }
}
