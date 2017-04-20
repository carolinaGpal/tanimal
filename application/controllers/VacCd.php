<?php defined('BASEPATH') OR exit('No direct script access allowed');

class VacCd extends CI_Controller {

	var $user;

	function __construct() {
        parent::__construct();
        $this->load->model('Vacunar');
    }

	public function index() {
		redirect('VacCd/home');
	}

	public function home() {		
		$this->load->view('crud/crudVacunarA', $data );
	}

	public function vacunar() {
		$data['listVacunar'] = $this->Vacunar->listar();
		$this->load->view('crud/crudVacunarA', $data );
	}

	// INICIO FUNCIONES DE AREAS

	public function agregar() {
		if ( !($this->input->post('codigo')) && !($this->input->post('nombre')) && !($this->input->post('fecha')) && !($this->input->post('fechaSig')) && !($this->input->post('codigoM')) && !($this->input->post('medicamento'))){
			redirect('index.php/VacCd/vacunar');
		} 
		else {
			$codigo = $this->input->post('codigo');
			$nombre = $this->input->post('nombre');
			$fecha = $this->input->post('fecha');
			$fechaSig = $this->input->post('fechaSig');
			$codigoM = $this->input->post('codigoM');
			$codigoMed = $this->input->post('medicamento');

			if(!$this->Vacunar->existe($codigo)) {
				$dat = array('codigo' => $codigo, 'nombre' => $nombre, 'fecha' => $fecha, 'fechaSiguiente' => $fechaSig, 'mascotaCodigo' => $codigoM, 'medicamentoCodigo' => $codigoMed);
				$this->Vacunar->insertar($dat);
			}
			else{
				$idd = $this->input->post('codigo');
				$dat = array('nombre' => $nombre, 'fecha' => $fecha, 'fechaSiguiente' => $fechaSig, 'mascotaCodigo' => $codigoM, 'medicamentoCodigo' => $codigoMed);
				$this->Vacunar->actualizar($dat, $idd);
			}
			redirect('index.php/VacCd/vacunar');
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
			$this->Vacunar->eliminar($idd);
		}
	}
}
