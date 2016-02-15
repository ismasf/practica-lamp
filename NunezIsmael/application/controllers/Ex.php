<?php 

class ex extends CI_Controller{
	
	public function index(){
		$this->crearaficionget();
	}
	
	public function crearaficionget(){
		//estos helper puedes ahorrartelos poniendolo en autoload
		
		
		$this->load->helper("marco");
		$this->load->helper("html");
		$this->load->helper("url");
		enmarcar($this, "aficion/crearget");
	}
	
	public function crearaficionpost(){
		$this->load->model ( 'aficiones_model', '', true );
		$datos ['status'] = $this->aficiones_model->crear ( $_POST ['nombre']);
		//$this->load->view ( 'crear/crearPost', $datos );
	
		$this->load->helper("marco");
		$this->load->helper("html");
		$this->load->helper("url");
	
		//enmarcar($this, 'crear/crearPost',$datos);
		$this->load->view("aficion/crearpost",$datos);
	
	}
	
	public function crearpersonaget(){
		$this->load->model ( 'aficiones_model', '', true );
		$datos["listaAficiones"]=$this->aficiones_model->listar();
		$this->load->helper("marco");
		$this->load->helper("html");
		$this->load->helper("url");
		enmarcar($this, "persona/crearget",$datos);
	}
	
	public function crearpersonapost(){
		$this->load->model ( 'persona_model', '', true );
		if(isset($_POST["aficiones"])){
			$datos ['status'] = $this->persona_model->crear ( $_POST ['nombre'],$_POST["aficiones"]);
		} else{
			$datos ['status'] = $this->persona_model->crearPersonaSolo ( $_POST ['nombre']);
		}
		
		
	
		$this->load->helper("marco");
		$this->load->helper("html");
		$this->load->helper("url");
	
		enmarcar($this, 'persona/crearpost',$datos);
		
	}
	
	
	public function listarpersona(){
		$this->load->model ( 'persona_model', '', true );
		$datos["listaPersonas"]=$this->persona_model->listar();
		$this->load->model ( 'perafi_model', '', true );
		$datos["listaPerAfi"]=$this->perafi_model->listar();
		//un helper para listar
		$this->load->helper("listar");
		$this->load->helper("marco");
		$this->load->helper("html");
		$this->load->helper("url");
		
		$datosProcesados["a"] = listarEjercicio($datos);
		enmarcar($this, 'persona/listar',$datosProcesados);
	}
	
	
	
}



?>
