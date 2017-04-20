<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Enfermedad extends CI_Model {

	public function __construct() {
        parent::__construct();
	}

	public function insertar($datos) {
		return $this->db->insert('enfermedad', $datos);
	}

	public function actualizar($datos, $codigo) {
		return $this->db->update('enfermedad', $datos, compact('codigo'));
	}

	public function eliminar($codigo) {
		$this->db->where(compact('codigo'));
		return $this->db->delete('enfermedad');
	}

	public function listar() {
		$this->db->from('enfermedad');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function listar_filtro($datos) {
		$this->db->from('enfermedad');
		$this->db->like('codigo', $codigo);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function consultar($codigo) {
		$this->db->from('enfermedad');
		$this->db->where(compact('codigo'));
		$query = $this->db->get();
		return $query->row_array();
	}
	
	public function obtenerNombre($codigo) {
		$this->db->from('enfermedad');
		$this->db->where(compact('codigo'));
		$query = $this->db->get();
		$res=$query->row_array();
		return $res['nombres'];
	}

	public function existe($codigo) {
		$this->db->from('enfermedad');
		$this->db->where(compact('codigo'));
		return ($this->db->count_all_results() > 0) ? TRUE : FALSE;
	}
}	
