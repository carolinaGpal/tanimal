<?php defined('BASEPATH') OR exit('No direct script access allowed');

class EnfCd extends CI_Controller {

	var $user;

	function __construct() {
        parent::__construct();
        $this->load->model('Enfermedad');
    }

	public function index() {
		redirect('EnfCd/home');
	}

	public function home() {		
		$this->load->view('crud/crudEnfermedadA', $data );
	}

	public function enfermedad() {
		$data['listEnfermedad'] = $this->Enfermedad->listar();
		$this->load->view('crud/crudEnfermedadA', $data );
	}

	// INICIO FUNCIONES DE AREAS

	public function agregar() {
		if ( !($this->input->post('codigo')) && !($this->input->post('codigoM')) && !($this->input->post('tipo')) && !($this->input->post('fecha')) && !($this->input->post('descripcion')) && !($this->input->post('medicamento')) && !($this->input->post('estado'))) {
			redirect('index.php/EnfCd/enfermedad');
		} 
		else {
			$codigo = $this->input->post('codigo');
			$codigoM = $this->input->post('codigoM');
			$tipo = $this->input->post('tipo');
			$fecha = $this->input->post('fecha');
			$descripcion = $this->input->post('descripcion');
			$medicamento = $this->input->post('medicamento');
			$estado = $this->input->post('estado');
			$fechaSal = $this->input->post('fechaSal');

			if(!$this->Enfermedad->existe($codigo)) {
				$dat = array('codigo' => $codigo, 'tipo' => $tipo, 'fecha' => $fecha, 'descripcion' => $descripcion, 'estado' => $estado, 'fechaSalida' => $fechaSal, 'codigoMascota' => $codigoM, 'codigoMedicamento' => $medicamento);
				$this->Enfermedad->insertar($dat);
			}
			else{
				$idd = $this->input->post('codigo');
				$dat = array('tipo' => $tipo, 'fecha' => $fecha, 'descripcion' => $descripcion, 'estado' => $estado, 'fechaSalida' => $fechaSal, 'codigoMascota' => $codigoM, 'codigoMedicamento' => $medicamento);
				$this->Enfermedad->actualizar($dat, $idd);
			}
			redirect('index.php/EnfCd/enfermedad');
		}
	}

	public function listarFiltroCliente() {
		if ($this->input->post('key')) {
			$data = $this->Cliente->listar_filtro($this->input->post('key'));
			foreach ($data as $valor) {
			    echo $valor['codigo'] . "::::" . $valor['nombres'] . "----". $valor['apellidos'] . "----". $valor['telefono'] . "----". $valor['direccion'] . "----". $valor['correo'] . "----". $valor['contra'] . "----";
			}
			
		}
	}

	public function eliminar() {
		if ($this->input->post('key')) {
			$idd = $this->input->post('key');
			$this->Enfermedad->eliminar($idd);
		}
	}
}
