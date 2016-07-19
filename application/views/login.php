<!-- Carrega o Header -->
<?php $this->load->view('includes/header');?>

<!-- Carrega o Menu -->
<?php $this->load->view('includes/menu');?>

<div class="background header col-sm-12 col-md-12">

    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form class="form-signin" action="<?php echo base_url('braingames/entrar');?>" method="post">
            <h2 class="form-signin-heading">Login:</h2>
            <label for="inputEmail" class="sr-only">Login</label>
            <input type="email" name="inputEmail" class="form-control" placeholder="Usuário ou Email" required autofocus>
            <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" name="inputPassword" class="form-control" placeholder="Senha" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Lembre-me
                </label>
            </div>
            <button class="btn btn-primary btn-block" name ="entrar" type="submit" >Entrar</button> 
        </form>
    </div>
    <div class="col-md-3"></div>
</div>