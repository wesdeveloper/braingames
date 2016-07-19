<!-- Carrega o Header -->
<?php $this->load->view('includes/header',$title);?>

<!-- Carrega o Menu -->
<?php $this->load->view('includes/menu');?>

	<?php 
		if(!$this->session->userdata('logado') === TRUE)
		{
			redirect('braingames/login');
		}
	?>

	<br><br>

	<h1>Bem Vindo área do Especialista</h1>
	
	Bem Vindo <?php echo $nome; ?>  <br>

	Email: <?php echo $email;?>	<br>
	Criado: <?php echo $created;?>

	<br><br>
	<a href="<?php echo site_url('usuarios/sair');?>">Sair</a>
	
</body>
</html>