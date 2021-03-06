<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Veterinario extends CI_Model {

	public function __construct() {
        parent::__construct();
	}

	public function insertar($datos) {
		return $this->db->insert('veterinario', $datos);
	}

	public function actualizar($datos, $cedula) {
		return $this->db->update('veterinario', $datos, compact('cedula'));
	}

	public function eliminar($cedula) {
		$this->db->where(compact('cedula'));
		return $this->db->delete('veterinario');
	}

	public function listar() {
		$this->db->from('veterinario');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function listar_filtro($datos) {
		$this->db->from('veterinario');
		$this->db->like('cedula', $cedula);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function consultar($cedula) {
		$this->db->from('veterinario');
		$this->db->where(compact('cedula'));
		$query = $this->db->get();
		return $query->row_array();
	}
	
	public function obtenerNombre($cedula) {
		$this->db->from('veterinario');
		$this->db->where(compact('cedula'));
		$query = $this->db->get();
		$res=$query->row_array();
		return $res['nombres'];
	}

	public function existe($cedula) {
		$this->db->from('veterinario');
		$this->db->where(compact('cedula'));
		return ($this->db->count_all_results() > 0) ? TRUE : FALSE;
	}
}	
