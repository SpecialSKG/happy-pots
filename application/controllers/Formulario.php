<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formulario extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('InicioModel');
    }

    public function index()
    {
        if ($this->session->userdata('login') === TRUE) {
            if ($this->session->userdata('tipo') == '1') {
                $data = array(
                    'page_title' => 'Formulario',
                    'view' => 'Formulario/Form',
                    'data_view' => array(
                        'datos' => $this->InicioModel->getFormulario()
                    )
                );
                $this->load->view('Template/main_admin', $data);
            } else if ($this->session->userdata('tipo') == '2') {
                redirect(base_url() . 'DashboardCliente', 'refresh');
            }
        } else {
            redirect(base_url() . 'Login', 'refresh');
        }
    }

    public function borrarFormulario()
    {
        if ($this->session->userdata('login') === TRUE) {
            if ($this->session->userdata('tipo') == '1') {
                if ($this->input->is_ajax_request()) {
                    $data = array('id' => $this->input->post('id'));
                    if ($this->InicioModel->deleteFormulario($data)) {
                        echo json_encode(array('success' => 1));
                    } else {
                        echo json_encode(array('success' => 0));
                    }
                } else {
                    echo "no se puede acceder";
                }
            } else if ($this->session->userdata('tipo') == '2') {
                redirect(base_url() . 'DashboardCliente', 'refresh');
            }
        } else {
            redirect(base_url() . 'Login', 'refresh');
        }
    }
}
