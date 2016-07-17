<!-- Carrega o Header -->
<?php $this->load->view('includes/header',$title);?>

<!-- Carrega o Menu -->
<?php $this->load->view('includes/menu');?>

<script src="<?php echo base_url("assets/js/jogos/jmFacil.js");?>"></script>

<!--- jogo da Memoria Facil-->
<script type="text/javascript">
    onload = GameControl.createGame();
</script>
<br><br><br><br><br>
<div class="col-md-12">
    <div class="col-md-3"></div>
    <div id="main" class="col-md-6 main">
        <div id="score"></div>
        <div id="game"></div>
        <div id="control">
            <input type="button" style="margin-top: 15px;" class="btn btn-success" value="Reiniciar"
                   onclick="GameControl.createGame()"/>
        </div>
    </div>
</div>
