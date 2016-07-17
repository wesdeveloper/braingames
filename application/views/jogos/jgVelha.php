<!-- Carrega o Header -->
<?php $this->load->view('includes/header',$title);?>

<!-- Carrega o Menu -->
<?php $this->load->view('includes/menu');?>

<script src="<?php echo base_url("assets/js/jogos/jgVelha.js");?>"></script>
<div class="col-xs-12 header">
    <div class="col-xs-12 text-center">
        <h4> Jogador 1 = X   |   Jogador 2 = O </h4>
        <h4>Jogar Contra Máquina
            <input type="checkbox" id="cpu" checked/><br/>
        </h4>
    </div>
    <div class="col-xs-3"></div>
    <div class="col-xs-6">
        <div>
            <table border="5px" cellspacing="7" align="center">
                <tr>
                    <td><img src="http://localhost/braingames/assets/img/jg_velha/fundo.jpg" id="1" onclick="chkJogo(this.id)"></td>
                    <td><img src="http://localhost/braingames/assets/img/jg_velha/fundo.jpg" id="2" onclick="chkJogo(this.id)"></td>
                    <td><img src="http://localhost/braingames/assets/img/jg_velha/fundo.jpg" id="3" onclick="chkJogo(this.id)"></td>
                </tr>
                <tr>
                    <td><img src="http://localhost/braingames/assets/img/jg_velha/fundo.jpg" id="4" onclick="chkJogo(this.id)"></td>
                    <td><img src="http://localhost/braingames/assets/img/jg_velha/fundo.jpg" id="5" onclick="chkJogo(this.id)"></td>
                    <td><img src="http://localhost/braingames/assets/img/jg_velha/fundo.jpg" id="6" onclick="chkJogo(this.id)"></td>
                </tr>
                <tr>
                    <td><img src="http://localhost/braingames/assets/img/jg_velha/fundo.jpg" id="7" onclick="chkJogo(this.id)"></td>
                    <td><img src="http://localhost/braingames/assets/img/jg_velha/fundo.jpg" id="8" onclick="chkJogo(this.id)"></td>
                    <td><img src="http://localhost/braingames/assets/img/jg_velha/fundo.jpg" id="9" onclick="chkJogo(this.id)"></td>
                </tr>
            </table>
            <br>
            <div align="center">
                <input type="submit" id="reinicia" value="Reiniciar" class="btn btn-success" onclick="reinicia()"
                       checked>
            </div>
        </div>

    </div>
    <div class="col-xs-3"></div>
</div>