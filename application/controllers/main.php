<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('bookmarksModel');
	}


	public function index()
	{

		$this->load->view('main');
		$this->load->view('headers/menu');
		

	}
	public function logout(){


	}
	public function agregar(){

		$this->load->view('headers/menu');
		$this->load->view('agregar');
		

	}
	public function guardar(){
		$data = array(
			'titulo'   => $this->input->post('titulo',TRUE),
			'url'      => $this->input->post('url', TRUE),
			
			'nombre'   => $this->input->post('nombre', TRUE),
			'creacion' => date('Y/m/d h:m')
		);

		$this->bookmarksModel->guardar($data);
		redirect('main/agregar');

	}
}
