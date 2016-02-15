<?php

class PerAfi_model extends CI_Model{
	
	public $idper;
	public $idaf;
	
	public function listar(){
		return $this->db->get("personas_aficiones")->result();
	}
	
	
	public function insertar($idPersona, $idAficiones){
		
		
		foreach ($idAficiones as $aficion){
			$this->idper=$idPersona;
			$this->idaf=$aficion;
			$this->db->insert('personas_aficiones',$this);
		}
		return true;
		
	}
	
	
	
	
}




?>