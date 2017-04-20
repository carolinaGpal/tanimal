<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model {

	public function __construct() {
        parent::__construct();
	}

	public function existe($correo, $contra) {
		$this->db->from('administrador');
		$this->db->where(compact('correo'));
		$this->db->where(compact('contra'));
		return ($this->db->count_all_results() > 0) ? TRUE : FALSE;
	}
}	
