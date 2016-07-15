<div class="header col-md-12">
    <h1 class="text-center"> Jogos para o Raciocinio Logico</h1>
    <div class="col-md-12">
        <h2>Jogo da velha</h2>
        <hr>
    </div>

    <div class="col-sm-4 col-md-4">
        <div class="thumbnail">
            <img src="img/logojv.jpg">
            <div class="caption">
                <h3>Jogo da velha</h3>

                <p class="text-justify"> Conseguir três "O" ou três "X" em uma linha, podendo ser na horizontal,
                    vertical ou diagonal.</p>

                <button type="button" class="btn btn-warning btn-block btn-group-lg" data-toggle="modal"
                        data-target="#myModal">
                    Mais Informações
                </button>
                <br>
                <p><a href="#jgVelha" class="btn btn-success btn-block btn-group-lg" role="button">
                    Jogar</a></p>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Informações:</h4>
                </div>
                <div class="text-justify modal-body">
                    <p>
                    <div>
                        <h4>> Objetivo do jogo:
                            <small>conseguir três "O" ou três "X" em uma linha, podendo ser
                                na horizontal, vertical ou diagonal. E na medida do possível impedir que o seu
                                adversário ganhe na próxima jogada.
                            </small>
                        </h4>
                    </div>
                    <hr>
                    <div>
                        <h4>
                            > Como jogar:
                            <small>
                                O jogo é composto por um tabuleiro (ou matriz) de três linhas e
                                três colunas. O jogador pode escolher em jogar contra a máquina ou jogar a
                                dois (com outra pessoa). Em seguida, o(s) jogador(es) jogam alternadamente,
                                cada um na sua vez vai marcando (clicando com o mouse) em qualquer lacuna
                                vazia preenchendo assim com "O" ou um "X". O primeiro que consegui
                                preencher uma linha com "O" ou "X" vence a partida. Lembrando também o A
                                jogador se possível pode impedir que seu adversário ganhe na próxima jogada.
                            </small>
                        </h4>
                    </div>
                    <hr>
                    <div style="margin-bottom: 80px">
                        <div class="col-xs-4"><h4>> Benefícios que traz em jogar:</h4></div>
                        <div class="col-xs-4">
                            <h4>
                                <small>
                                    I. trabalha a atenção; <br>
                                    II. o raciocínio lógico; <br>
                                </small>
                            </h4>
                        </div>
                        <div class="col-xs-4">
                            <h4>
                                <small>
                                    III. estratégico; <br>
                                    IV. coordenação motora.
                                </small>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-block btn-group-lg" data-dismiss="modal">Fechar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').focus()
        })
    </script>

</div>