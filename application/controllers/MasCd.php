<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MasCd extends CI_Controller {

	var $user;

	function __construct() {
        parent::__construct();
        $this->load->model('Mascota');
    }

	public function index() {
		redirect('MasCd/home');
	}

	public function home() {		
		$this->load->view('crud/crudMascotas', $data );
	}

	public function mascota() {
		$data['listMascota'] = $this->Mascota->listar();
		$this->load->view('crud/crudMascotas', $data );
	}

	// INICIO FUNCIONES DE AREAS

	public function agregar() {
		if ( !($this->input->post('codigo')) && !($this->input->post('nombre')) && !($this->input->post('fechaNac')) && !($this->input->post('tipo')) && !($this->input->post('raza')) && !($this->input->post('sexo')) && !($this->input->post('clienteCodigo'))){

				redirect('index.php/MascotasCd/mascota');
		} 
		else {
			$codigo = $this->input->post('codigo');
			$nombre = $this->input->post('nombre');
			$fechaNac = $this->input->post('fechaNac');
			$tipo = $this->input->post('tipo');
			$raza = $this->input->post('raza');
			$sexo = $this->input->post('sexo');
			$dueño = $this->input->post('clienteCodigo');

			if(!$this->Mascota->existe($codigo)) {
				$dat = array('codigo' => $codigo, 'nombre' => $nombre, 'fechaNac' => $fechaNac, 'tipo' => $tipo, 'raza' => $raza, 'sexo' => $sexo, 'clienteCodigo' => $dueño);
				$this->Mascota->insertar($dat);
			} 
			else {
				$idd = $this->input->post('codigo');
				$data = array('nombre' => $nombre, 'fechaNac' => $fechaNac, 'tipo' => $tipo, 'raza' => $raza, 'sexo' => $sexo, 'clienteCodigo' => $dueño);
				$this->Mascota->actualizar($data, $idd);
			}
			//redirect('index.php/MasCd/mascota');
		}
	}

	public function listarFiltroMascota() {
		if ($this->input->post('key')) {
			$data = $this->Mascota->listar_filtro($this->input->post('key'));
			foreach ($data as $valor) {
			    echo $valor['codigo'] . "::::" . $valor['nombre'] . "----". $valor['fechaNac'] . "----". $valor['tipo'] . "----". $valor['raza'] . "----". $valor['sexo'] . "----";
			}
			
		}
	}

	public function eliminar() {
		if ($this->input->post('key')) {
			$idd = $this->input->post('key');
			$this->Mascota->eliminar($idd);
		}
	}
}
