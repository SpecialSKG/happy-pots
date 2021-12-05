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
        $this->load->model('crudModel');
        $this->load->model('CartModel');
        $this->tabla = "detalle_temp";
        $this->nombreCampoId = "id";
    }

    public function index()
    {
        $data = array(
            'page_title' => 'Carrito',
            'view' => 'cart',
            'data_view' => array(
                'detalles' => $this->verCarritoUser(),
                'lugares' => $this->crudModel->mostrar("id", "lugar")
            )
        );
        $this->load->view('Template/main_view', $data);
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
    public function verCarritoUser()
    {
        if ($this->session->userdata('login')) {
            $this->load->model('crudModel');
            $carrito = $this->crudModel->listarLoQueSea('SELECT t.id, p.nombre, p.precio, t.cantidad, p.img_producto_id FROM `detalle_temp` t INNER join `producto` p on t.producto = p.id Inner join `material` m on t.material = m.id WHERE t.usuario = ' . $this->session->userdata('id'));
            return $carrito;
        } else {
            redirect(base_url('Login'));
        }
    }

    /*
    se necesita esta loggeado y un input post id(int) 
     */
    public function eliminarProductoCarrito()
    {
        if ($this->session->userdata('login')) {
            $idTempCarrito = $this->input->post('id');
            $tempCarrito = $this->crudModel->mostrarById($idTempCarrito);
            if ($tempCarrito->usuario == $this->session->userdata('id')) {
                if ($this->crudModel->eliminar($idTempCarrito, $this->nombreCampoId, $this->tabla)) {
                    echo json_encode(array('success' => 1, 'message' => 'Producto removido del carrito'));
                } else {
                    echo json_encode(array('success' => 0, 'message' => 'Error al remover producto del carrito'));
                }
            } else {
                echo json_encode(array('success' => 0, 'message' => 'El producto no esta en tu carrito'));
            }
        } else {
            redirect(base_url('Login'));
        }
    }

    /*------------ */
    public function actualizarCantidad()
    {
        try {
            $item = $this->verporid();
            $item->cantidad = $this->input->post('cantidad');
            if ($item->cantidad <= 0) {
                $item->cantidad = 1;
            }
            //$id, $nombreCampoId, $tabla, $item
            $this->crudModel->actualizar($item->id, "id", "detalle_temp", $item);
            redirect(base_url('Carrito'));
        } catch (Exception $e) {
            echo $e;
        }
    }

    public function removerCarrito()
    {
        $this->crudModel->eliminar($this->input->post('id'), $this->nombreCampoId, $this->tabla);
        redirect(base_url('Carrito'));
    }

    public function verporid()
    {
        $this->load->model('crudModel');
        return $this->crudModel->mostrarItem($this->input->post('id'), "id", "detalle_temp");
    }

    /*------------ */

    /*
    funcion para actualizar una row de la tabla detalle_temp
    se necesita estar loggeado y los inputs id(int (id del detalle_temp)) producto(int) material(int) cantidad(int)
    */
    public function modificarProducto()
    {
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

    public function reserva()
    {
        $date = str_replace('/', '-',$this->input->post('fecha') ) ;
       // $date = DateTime::createFromFormat('d/m/Y', $this->input->post('fecha'));

       $idquemado = $this->session->userdata('id');
       echo $idquemado;
        $item = (object) array(
            'fecha' => date('Y-m-d', strtotime($date)),
            'lugar' => $this->input->post('lugarhidden'),
            'hora' => $this->input->post('horahidden'),
            'total' => $this->input->post('total'),
            'id' => $this->session->userdata('id'),
        );

        $this->CartModel->executeInsert($item);
        redirect(base_url("Reservas/obtenerReservaPerfil/"). $this->session->userdata("id"));
    }
}
