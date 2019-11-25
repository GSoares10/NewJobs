<?php
    require_once('front/header.php');
?>


<div class="container pesquisa-css">
  <div class="grey lighten-5 z-depth-1">
    <div class="row">
      <div class="col s12">

        <div class="card-content center">
          <div class="input-field col s8 offset-s2">
            <label for="pesquisa">Pesquisa
              <i class="material-icons right">search</i>
            </label>
            <input type="text">
          </div>
            <div class="input-field col s4 offset-s4">
              <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Todos</option>
                <option value="2">Usuarios</option>
                <option value="3">Empreendedores</option>
              </select>
              <label>Filtro</label>
            </div>
        </div>
        <div class="card-action col s12">
          <p>Resultados: </p>
          <div class="lista-resultados">

          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<?php include_once("front/footer.php");?>