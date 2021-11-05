<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Carrito extends CI_Controller
{
    var $tabla;
    var $nombreCampoId;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('CrudModel');
        $this->tabla = "detalle_temp";
        $this->nombreCampoId = "id";
    }

    public function index()
    {
        $data = array(
            'page_title' => 'Carrito',
            'view' => 'cart',
            'data_view' => array(
                'detalles' => $this->verCarritoUser()
            )
        );
        $this->load->view('Template/main_view',$data);
    }

/*  Esta funcion es para insertar un registro en detalle_temp,
    se necesita esta logeado, con inputs post producto(int) materia(int) cantidad(int)
     se envia una respuesta en json en caso que inserte o no, 1 si inserta 0 si no lo hace
*/
    public function insertar()
    {
        if ($this->session->userdata('login')) {
            if ($this->input->is_ajax_request()) {
                $item = array(
                    'usuario' => $this->session->userdata('id'),
                    'producto' => $this->input->post('producto', true),
                    'material' => $this->input->post('materia', true),
                    'cantidad' => $this->input->post('cantidad', true),
                    'id_categoria' => $this->input->post('categoria', true)
                );

                if ($this->crudModel->insertar($this->tabla, $item)) {
                    echo json_encode(array('success' => 1, 'message' => 'Producto ingresado al carrito'));
                } else {
                    echo json_encode(array('success' => 0, 'message' => 'Error al insertar en el carrito'));
                }
            }
        } else {
            redirect(base_url('Login'));
        }
    }

    /*
    no se necesita ningun input, solamente estar loggeado
    devuelve un json con el contenido de los registros de detalle_temp em forma de json
    */
    public function verCarritoUser(){
        if ($this->session->userdata('login')) {
            $this->load->model('crudModel');
            $carrito = $this->crudModel->listarWhereQuery('`detalle_temp` t INNER join `producto` p on t.producto = p.id Inner join `material` m on t.material = m.id', ' usuario = '.$this->session->userdata('id'));
            return $carrito;
        } else {
            redirect(base_url('Login'));
        }
    }

    /*
    se necesita esta loggeado y un input post id(int) 
     */
    public function eliminarProductoCarrito(){
        if ($this->session->userdata('login')) {
            $idTempCarrito = $this->input->post('id');
            $tempCarrito = $this->crudModel->mostrarById($idTempCarrito);
            if($tempCarrito->usuario == $this->session->userdata('id')){
                if($this->crudModel->eliminar($idTempCarrito, $this->nombreCampoId, $this->tabla)){
                    echo json_encode(array('success' => 1, 'message'=> 'Producto removido del carrito'));
                }else{
                    echo json_encode(array('success' => 0, 'message'=> 'Error al remover producto del carrito'));
                }
            }else{
                echo json_encode(array('success' => 0, 'message'=> 'El producto no esta en tu carrito'));
            }
        } else {
            redirect(base_url('Login'));
        }
    }

    /*
    funcion para actualizar una row de la tabla detalle_temp
    se necesita estar loggeado y los inputs id(int (id del detalle_temp)) producto(int) material(int) cantidad(int)
    */
    public function modificarProducto(){
        if ($this->session->userdata('login')) {
            if ($this->input->is_ajax_request()) {
                $item = array(
                    'id' => $this->input->post('id'),
                    'usuario' => $this->session->userdata('id'),
                    'producto' => $this->input->post('producto', true),
                    'material' => $this->input->post('materia', true),
                    'cantidad' => $this->input->post('cantidad', true)
                );
                if ($this->crudModel->actualizar($this->input->post('id'), $this->nombreCampoId, $this->tabla, $item)) {
                    echo json_encode(array('success' => 1, 'message' => 'Carrito Actualizado'));
                } else {
                    echo json_encode(array('success' => 0, 'message' => 'Error al actualizar carrito'));
                }
            }
        } else {
            redirect(base_url('Login'));
        }
    }

    /*
    
    */
}
