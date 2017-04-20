<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Acceder extends CI_Controller {

	var $user;

	function __construct() {
        parent::__construct();
        $this->load->model('Login');
    }

    public function  ingresar() {
           $correo =  $this->input->post('correo');
           $contra =  $this->input->post('contra');
               if ($correo!=null or $contra!=null) {
                  if($this->Login->existe($correo,$contra)){
                    redirect('../../index.php/Navegacion/usuarioAd');
                  }
                  else{
                    $this->session->set_flashdata('validacion', '1');
                               redirect(base_url());
                  }
               }
               else{
                $this->session->set_flashdata('validacion', '2');
                redirect(base_url());
               }
       }
}
