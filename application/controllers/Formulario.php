<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Formulario extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_inicio');
    }

    public function index()
    {
        if ($this->session->userdata("login") === TRUE) {
            $data = array(
                'page_title' => 'Formulario',
                'view' => 'Formulario/Form',
                'data_view' => array(
                    'datos' => $this->model_inicio->getFormulario()
                )
            );
            $this->load->view('Template/main_admin', $data);
        } else {
            redirect(base_url() . 'Login', 'refresh');
        }
    }

    public function borrarFormulario()
	{
		if ($this->input->is_ajax_request()) {
			$data = array('id' => $this->input->post('id'));
			if ($this->model_inicio->deleteFormulario($data)) {
				echo json_encode(array('success' => 1));
			} else {
				echo json_encode(array('success' => 0));
			}
		} else {
			echo "no se puede acceder";
		}
	}
}
