<?php
function enmarcar($controlador,$vista,$datos=[]) {
	$controlador->load->view('templates/head');
	$controlador->load->view('templates/header');

	
	
	$controlador->load->view('templates/nav');
	
	$controlador->load->view($vista,$datos);
	$controlador->load->view('templates/footer');
	$controlador->load->view('templates/end');
}
?>