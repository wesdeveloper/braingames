<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jogos extends CI_Controller {

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
		redirect('categorias/index');
	}

	public function jogomemoriafacil()
	{
		$data['title'] = "Jogo da Memoria - Fácil";
		$this->load->view('jogos/jmFacil', $data);
	}

	public function jogomemoriamedio()
	{
		$data['title'] = "Jogo da Memoria - Médio";
		$this->load->view('jogos/jmMedio', $data);
	}

		public function jogomemoriadificil()
	{
		$data['title'] = "Jogo da Memoria - Dificil";
		$this->load->view('jogos/jmDificil', $data);
	}

	public function jogovelha()
	{
		$data['title'] = "Jodo da Velha";
		$this->load->view('jogos/jgVelha', $data);
	}
}
