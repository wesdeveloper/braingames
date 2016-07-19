<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
	public function check_login($email, $senha)
	{
		//Define a tabela
		$this->db->from('usuarios');

		//Define os Wheres
		$this->db->where('email',$email);
		$this->db->where('senha',$senha);
		
		//Realiza a busca
		$usuarios = $this->db->get();

		if($usuarios->num_rows())
		{
			$usuario = $usuarios->result_array();
			return $usuario[0];
		}
		else
		{
			return FALSE;
		}
	}
}