<?php
class Aficiones_model extends CI_Model{
	
	public $nombre;
	
	public function listar(){
		return $this->db->get("aficiones")->result();
	}
	
	public function crear($nombre){
	
		$lista=$this->listar();
		foreach ($lista as $aficion){
			if($aficion->nombre==$nombre){
				return false;
			}
		}
	
		$this->nombre=$nombre;
		$this->db->insert('aficiones',$this);
		return true;
	}
	
	
}