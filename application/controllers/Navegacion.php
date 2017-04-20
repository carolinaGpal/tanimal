<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Navegacion extends CI_Controller {

	function __construct() {
        parent::__construct();
    }

    public function index() {
	$this->load->view('index');
    }

    public function acerca(){
    	$this->load->view('about');
    }

    public function sesion(){
    	$this->load->view('login/index');
    }

    public function error(){
        $this->load->view('error');
    }

    public function contacto(){
    	$this->load->view('contact');
    }

    public function servicios(){
    	$this->load->view('404');
    }

    public function usuarioAd(){
        $this->load->view('crud/administrador');
    }

    public function usuarioCl(){
        $this->load->view('crud/cliente');
    }

    public function usuarioVe(){
        $this->load->view('crud/veterinario');
    }

    public function usuarioSe(){
        $this->load->view('crud/secretario');
    }
    /*--- Administrador --*/
    public function crudMA(){
        redirect('index.php/MasCd/mascota');
    }

    public function crudCA(){
        redirect('index.php/ClieCd/cliente');
    }

    public function crudVA(){
        redirect('index.php/VetCd/veterinario');
    }

    public function crudSA(){
        redirect('index.php/SeCd/secretario');
    }

    public function crudMedA(){
        $this->load->view('crud/crudMedicamentoA');
    }

    public function crudEnfA(){
        $this->load->view('crud/crudEnfermedadA');
    }

    public function crudVacA(){
        $this->load->view('crud/crudVacunarA');
    }

    public function crudDesA(){
        $this->load->view('crud/crudDesparasitarA');
    }

    public function crudEsA(){
        $this->load->view('crud/crudEsterilizarA');
    }

}
