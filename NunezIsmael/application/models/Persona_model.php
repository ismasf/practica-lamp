<?php 

class Persona_model extends CI_Model{
	
	public $nombre;
	
	public function listar(){
		return $this->db->get("personas")->result();
	}
	
	public function crear($nom, $afic){
		$this->nombre=$nom;
		$this->db->insert('personas',$this);
		$this->load->model("perafi_model","",true);
		$this->perafi_model->insertar($this->db->insert_id(),$afic);
		
		return true;
		
		
	}
	public function crearPersonaSolo($nomb) {
		$this->nombre=$nomb;
		$this->db->insert('personas',$this);
		return true;
	}
	
	
}



?>