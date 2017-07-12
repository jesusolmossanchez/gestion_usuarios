<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Socios_model extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->database();
    }

	public function get_listado() {
	    $this->db->select('*');
		$this->db->from('socios');
		
		$query = $this->db->get();
	    $socios = $query->result();
	    return $socios;
    }

	public function get_info($id) {

	    $this->db->select('socios.*');
		$this->db->from('socios');
		$this->db->where('socios.id', $id);
		
		$query = $this->db->get();
	    $socio = $query->row();
	    return $socio;

    }




	public function editar_socio($data, $id) {
		$this->db->update('socios', $data, array('id' => $id));
    }


    public function crear_socio($data) {

		$this->db->insert('socios', $data);
		$insert_id = $this->db->insert_id();
		return $insert_id;
		
    }

}
