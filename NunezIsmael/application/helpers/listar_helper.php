<?php

function listarEjercicio($datos){
	$datos["listaPersonas"];
	$datos["listaPerAfi"];
	$cont=0;
	$datos["a"]=[];
	foreach ($datos["listaPersonas"] as $persona){
		
		foreach ($datos["listaPerAfi"] as $li){
			
			if($persona->idper==$li->idper){
				$cont++;
			}
			
			
		}
		if($cont!=0){
			array_push($datos["a"], [$persona->nombre, $cont]);
		}
		$cont = 0;
		
		
		
		
	}
	
	
	return $datos["a"];
	
	
	
}



?>