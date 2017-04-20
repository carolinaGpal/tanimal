<?php defined('BASEPATH') OR exit('No direct script access allowed');

class VetCd extends CI_Controller {

	var $user;

	function __construct() {
        parent::__construct();
        $this->load->model('Veterinario');
    }

	public function index() {
		redirect('VetCd/home');
	}

	public function home() {		
		$this->load->view('crud/crudVeterinarioA', $data );
	}

	public function veterinario() {
		$data['listVeterinario'] = $this->Veterinario->listar();
		$this->load->view('crud/crudVeterinarioA', $data );
	}

	// INICIO FUNCIONES DE AREAS

	public function agregar() {
		if ( !($this->input->post('cedula')) && !($this->input->post('nombres')) && !($this->input->post('apellidos')) && !($this->input->post('telefono')) && !($this->input->post('horario')) && !($this->input->post('correo')) && !($this->input->post('contra')))
		{
			redirect('index.php/VetCd/veterinario');
		} else {
			$cedula = $this->input->post('cedula');
			$nombres = $this->input->post('nombres');
			$apellidos = $this->input->post('apellidos');
			$telefono = $this->input->post('telefono');
			$horario = $this->input->post('horario');
			$correo = $this->input->post('correo');
			$contra = $this->input->post('contra');

			if(!$this->Veterinario->existe($cedula)) {
				$dat = array('cedula' => $cedula, 'nombres' => $nombres, 'apellidos' => $apellidos, 'telefono' => $telefono, 'horario' => $horario, 'correo' => $correo, 'contra' => $contra);
				$this->Veterinario->insertar($dat);

			} 
			else {
				$idd = $this->input->post('cedula');
				$dat = array('nombres' => $nombres, 'apellidos' => $apellidos, 'telefono' => $telefono, 'horario' => $horario, 'correo' => $correo, 'contra' => $contra);
				$this->Veterinario->actualizar($dat, $idd);
			}
			redirect('index.php/VetCd/veterinario');
		}
	}

	public function listarFiltroCliente() {
		if ($this->input->post('key')) {
			$data = $this->Veterinario->listar_filtro($this->input->post('key'));
			foreach ($data as $valor) {
			    echo $valor['cedula'] . "::::" . $valor['nombres'] . "----". $valor['apellidos'] . "----". $valor['telefono'] . "----". $valor['horario'] . "----". $valor['correo'] . "----". $valor['contra'] . "----";
			}
			
		}
	}

	public function eliminar() {
		if ($this->input->post('key')) {
			$idd = $this->input->post('key');
			$this->Veterinario>eliminar($idd);
		}
	}
}
