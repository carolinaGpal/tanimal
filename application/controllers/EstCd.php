<?php defined('BASEPATH') OR exit('No direct script access allowed');

class EstCd extends CI_Controller {

	var $user;

	function __construct() {
        parent::__construct();
        $this->load->model('Esterilizar');
    }

	public function index() {
		redirect('ClieCd/home');
	}

	public function home() {		
		$this->load->view('crud/crudEsterilizarA', $data );
	}

	public function esterilizar() {
		$data['listCliente'] = $this->Cliente->listar();
		$this->load->view('crud/crudEsterilizarA', $data );
	}

	// INICIO FUNCIONES DE AREAS

	public function agregar() {
		if ( !($this->input->post('cedula')) && !($this->input->post('nombres')) && !($this->input->post('apellidos')) && !($this->input->post('telefono')) && !($this->input->post('direccion')) && !($this->input->post('correo'))){
			redirect('index.php/ClieCd/cliente');
		} 
		else {
			$cedula = $this->input->post('cedula');
			$nombres = $this->input->post('nombres');
			$apellidos = $this->input->post('apellidos');
			$telefono = $this->input->post('telefono');
			$direccion = $this->input->post('direccion');
			$correo = $this->input->post('correo');
			$contra = $this->input->post('contra');

			if(!$this->Cliente->existe($cedula)) {
				$dat = array('cedula' => $cedula, 'nombres' => $nombres, 'apellidos' => $apellidos, 'telefono' => $telefono, 'direccion' => $direccion, 'correo' => $correo, 'contra' => $contra);
				$this->Cliente->insertar($dat);
			}
			else{
				$idd = $this->input->post('cedula');
				$dat = array('nombres' => $nombres, 'apellidos' => $apellidos, 'telefono' => $telefono, 'direccion' => $direccion, 'correo' => $correo, 'contra' => $contra);
				$this->Cliente->actualizar($dat, $idd);
			}
			redirect('index.php/ClieCd/cliente');
		}
	}

	public function listarFiltroCliente() {
		if ($this->input->post('key')) {
			$data = $this->Cliente->listar_filtro($this->input->post('key'));
			foreach ($data as $valor) {
			    echo $valor['cedula'] . "::::" . $valor['nombres'] . "----". $valor['apellidos'] . "----". $valor['telefono'] . "----". $valor['direccion'] . "----". $valor['correo'] . "----". $valor['contra'] . "----";
			}
			
		}
	}

	public function eliminar() {
		if ($this->input->post('key')) {
			$idd = $this->input->post('key');
			$this->Cliente->eliminar($idd);
		}
	}
}
