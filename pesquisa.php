<?php
    require_once('front/header.php');

    $contaDAO = new ContaDAO();

?>

<div class="container pesquisa-css">
  <div class="grey lighten-5 z-depth-1">
    <div class="row">
      <div class="col s12">
        <form action="pesquisarConta.php" method="POST">
          <div class="card-content center">
            <div class="input-field col s8 offset-s2">
              <label for="pesquisa">Pesquisa
                <i class="material-icons right">search</i>
              </label>
              <input type="text" name="campoPesquisa">
            </div>
            <div class="input-field col s6 offset-s3">
              <select name="filtroPesquisa">
                <option value="" disabled selected>Todos</option>
                <option value="Usuário">Usuarios</option>
                <option value="Empreendedor">Empreendedores</option>
              </select>
              <label>Filtro</label>
              <button href="#" class="btn orange darken-2">
                <i class="material-icons">send</i>
              </button>
            </div>
          </div>
        </form>
        <div class="card-action col s12">
          <p>Resultados: </p>
          <div class="lista-resultados">
            <?php

            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer center">
    <span>&copy; 2019 G.S</span>
  </div>
</div>

<?php include_once("front/footer.php");?>