<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		redirect('braingames/login');
	}

	public function especialista()
	{
		$data = array(
			'title' => "Especialista", 
			'email' => $this->session->userdata('email'), 
			'nome' => $this->session->userdata('nome'), 
			'created' => $this->session->userdata('created'), 
			);

		$this->load->view('usuarios/especialista', $data);
	}

	public function sair()
	{
		$this->session->sess_destroy();
		
		redirect('braingames/login');
	}
}
