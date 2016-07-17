<!-- Carrega o Header -->
<?php $this->load->view('includes/header',$title);?>

<!-- Carrega o Menu -->
<?php $this->load->view('includes/menu');?>

<div class="header col-sm-12 col-md-12">
    <div class="row row-offcanvas row-offcanvas-right col-xs-3 col-sm-3">
        <div class="list-group sidebar-offcanvas hidden-xs">
            <span style="background-color: #2780E3; margin-bottom: 15px"
                  class="texto list-group-item list-group-item-heading">Categorias</span>
            <a href="<?php echo site_url('categorias/memoria'); ?>" class="list-group-item"> Memoria de curto prazo</a>
            <a href="<?php echo site_url('categorias/raciociniologico'); ?>" class="list-group-item"> Raciocinio Logico</a>
        </div>
    </div>

    <div class="col-sm-9 col-md-9">
        <div class="col-sm-12 col-md-12 dropdown visible-xs" style="margin-bottom: 10px">
            <button class="btn btn-block btn-primary dropdown-toggle" type="button" id="dropdownMenu1"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Categorias
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu col-xs-12" aria-labelledby="dropdownMenu1">
                <li><a href="<?php echo site_url('categorias/memoria'); ?>">Memoria de curto prazo</a></li>
                <li><a href="<?php echo site_url('categorias/raciociniologico'); ?>">Rciocinio Logico</a></li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-12" style="margin-bottom: 15px">
            <span style="background-color: #2780E3;" class="texto list-group-item list-group-item-heading">Jogos populares</span>
        </div>

        <div class="col-sm-6 col-md-6">
            <div class="thumbnail">
                <img src="<?php echo base_url("assets/img/logojv.jpg");?>">
                <div class="caption">
                    <h3>Jogo da velha</h3>
                    <p class="text-justify">Conseguir três "O" ou três "X" em uma linha, podendo ser
                        na horizontal, vertical ou diagonal.
                    </p>
                    <p><a href="<?php echo site_url('jogos/jogovelha'); ?>" class="btn btn-success btn-block btn-group-lg" role="button">
                        Jogar</a></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-6">
            <div class="thumbnail">
                <img style="height: 199px;" src="<?php echo base_url("assets/img/logojm.jpg");?>">
                <div class="caption">
                    <h3>Jogo da memoria</h3>
                    <p class="text-justify">Encontre todos os pares iguais das fotos, neste jogo de raciocínio
                        online.</p>
                    <p><a href="<?php echo site_url('jogos/jogomemoriamedio'); ?>" class="btn btn-success btn-block btn-group-lg"
                          role="button"> Jogar</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Carrega o Footer -->
    <?php $this->load->view('includes/footer'); ?>