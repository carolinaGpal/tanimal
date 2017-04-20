<?php defined('BASEPATH') OR exit('No direct script access allowed');

class SeCd extends CI_Controller {

	var $user;

	function __construct() {
        parent::__construct();
        $this->load->model('Secretario');
    }

	public function index() {
		redirect('SeCd/home');
	}

	public function home() {		
		$this->load->view('crud/crudSecretarioA', $data );
	}

	public function secretario() {
		$data['listSecretario'] = $this->Secretario->listar();
		$this->load->view('crud/crudSecretarioA', $data );
	}

	// INICIO FUNCIONES DE AREAS

	public function agregar() {
		if ( !($this->input->post('cedula')) && !($this->input->post('nombres')) && !($this->input->post('apellidos')) && !($this->input->post('telefono')) && !($this->input->post('correo'))){
			redirect('index.php/SeCd/secretario');
		} 
		else {
			$cedula = $this->input->post('cedula');
			$nombres = $this->input->post('nombres');
			$apellidos = $this->input->post('apellidos');
			$telefono = $this->input->post('telefono');
			$correo = $this->input->post('correo');
			$contra = $this->input->post('contra');

			if(!$this->Secretario->existe($cedula)) {
				$dat = array('cedula' => $cedula, 'nombres' => $nombres, 'apellidos' => $apellidos, 'telefono' => $telefono, 'correo' => $correo, 'contra' => $contra);
				$this->Secretario->insertar($dat);
			}
			else{
				$idd = $this->input->post('cedula');
				$dat = array('nombres' => $nombres, 'apellidos' => $apellidos, 'telefono' => $telefono, 'correo' => $correo, 'contra' => $contra);
				$this->Secretario->actualizar($dat, $idd);
			}
			redirect('index.php/SeCd/secretario');
		}
	}

	public function listarFiltroSecretario() {
		if ($this->input->post('key')) {
			$data = $this->Secretario->listar_filtro($this->input->post('key'));
			foreach ($data as $valor) {
			    echo $valor['cedula'] . "::::" . $valor['nombres'] . "----". $valor['apellidos'] . "----". $valor['telefono'] . "----". $valor['correo'] . "----". $valor['contra'] . "----";
			}
			
		}
	}

	public function eliminar() {
		if ($this->input->post('key')) {
			$idd = $this->input->post('key');
			$this->Secretario->eliminar($idd);
		}
	}
}
