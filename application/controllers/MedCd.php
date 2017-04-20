<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MedCd extends CI_Controller {

	var $user;

	function __construct() {
        parent::__construct();
        $this->load->model('Medicamento');
    }

	public function index() {
		redirect('MedCdCd/home');
	}

	public function home() {		
		$this->load->view('crud/crudMedicamentoA', $data );
	}

	public function medicamento() {
		$data['listMedicamento'] = $this->Medicamento->listar();
		$this->load->view('crud/crudMedicamentoA', $data );
	}

	// INICIO FUNCIONES DE AREAS

	public function agregar() {
		if ( !($this->input->post('codigo')) && !($this->input->post('nombre')) && !($this->input->post('fechaVen')) && !($this->input->post('tipo'))){
			redirect('index.php/MedCd/medicamento');
		} 
		else {
			$codigo = $this->input->post('codigo');
			$nombre = $this->input->post('nombre');
			$fechaVen = $this->input->post('fechaVen');
			$tipo = $this->input->post('tipo');

			if(!$this->Medicamento->existe($codigo)) {
				$dat = array('codigo' => $codigo, 'nombre' => $nombre, 'fechaVencimiento' => $fechaVen, 'tipoMascota' => $tipo);
				$this->Medicamento->insertar($dat);
			}
			else{
				$idd = $this->input->post('codigo');
				$dat = array('nombre' => $nombre, 'fechaVencimiento' => $fechaVen, 'tipoMascota' => $tipo);
				$this->Medicamento->actualizar($dat, $idd);
			}
			redirect('index.php/MedCd/medicamento');
		}
	}

	public function listarFiltroMedicamento() {
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
			$this->Medicamento->eliminar($idd);
		}
	}
}
