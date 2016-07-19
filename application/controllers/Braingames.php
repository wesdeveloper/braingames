<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Braingames extends CI_Controller {

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
		$data['title'] = "Home";
		redirect('braingames/home');
	}

	public function home()
	{
		$data['title'] = "Home";
		$this->load->view('home', $data);
	}

	public function projeto()
	{
		$data['title'] = "Projeto";
		$this->load->view('projeto', $data);
	}

	public function equipe()
	{
		$data['title'] = "Equipe";	
		$this->load->view('equipe', $data);	
	}

	public function login()
	{	
		$data['title'] = "Login";
		$this->load->view('login', $data);
	}

	//Verifica o login do Usuário
	public function entrar()
	{	
		//Carrega o Model Usuario
		$this->load->model('usuarios_model');

		$email = $this->input->post('inputEmail');	
		$senha = $this->input->post('inputPassword');
	
		$login_existe = $this->usuarios_model->check_login($email, $senha);
		
		if ($login_existe)
		{
			//Usuário autenticado....
			$usuario = $login_existe;

			//Configura os dados da session
			$session 	= array(
	        'nome'  	=> $usuario['nome'],
	        'email'     => $usuario['email'],
	        'created'   => $usuario['created'],
	        'logado' 	=> TRUE
			);

			//Inicializa a session
			$this->session->set_userdata($session);

			//Inicia a sessão e redireciona
			redirect('usuarios/especialista');
		}else
		{
			redirect('braingames/login');
		}		
	}
}
