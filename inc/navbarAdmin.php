<?php
  include (MODAL_NOVARODADA_TEMPLATE);
  include (MODAL_NOVAPARTIDA_TEMPLATE);
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Jogador <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="adicionarJogador.php">Adicionar Jogador</a></li>
            <li><a href="pesquisarJogador.php">Pesquisar Jogador</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clube <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="adicionarTime.php">Adicionar Clube</a></li>
            <li><a href="pesquisarTime.php">Pesquisar Clube</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Rodada <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a data-toggle="modal" data-target="#myModalNovaRodada">Adicionar Rodada</a>
            <li><a href="rodadas.php">Todas as Rodadas</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Partida <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a data-toggle="modal" data-target="#myModalNovaPartida">Adicionar Partida</a>
            <li><a href="partidas.php">Todas as Partidas</a></li>
          </ul>
        </li>

        <li>
          <a href="novoCampeonato.php"><i class="fa fa-plus"></i> Novo Campeonato </a>
        </li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>