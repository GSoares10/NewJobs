<?php
    require_once('front/header.php');
    require_once('php/contaDAO.php');
    require_once('php/conta.class.php');

    $contaDAO = new ContaDAO();
    $pesquisa = "%".$_POST['campoPesquisa']."%";
    $pesquisas = $contaDAO->Pesquisa($pesquisa, 10, 0);

?>

<div class="container pesquisa-css">
  <div class="grey lighten-5 z-depth-1">
    <div class="row">
      <div class="col s12">
        <div class="card-action col s12">
          <p>Resultados da sua pesquisa: </p>
          <div class="lista-resultados">
            <?php
              foreach($pesquisas as $conta) {
            ?>
            <div class="card col s8 l3 offset-s2">
              <div class="card-content center">
                <div class="card-image-user">
                <?php 
                  if($conta->getSexo() == 'Masculino') {
                ?>
                <a href="perfil.php?codConta=<?php echo $conta->getCodConta();?>">
                  <img class="circle responsive-img center" id="user-img"  src="media/person.png">
                </a>
                <?php
                  }else if($conta->getSexo() == 'Feminino') {
                ?>
                <a href="perfil.php?codConta=<?php echo $conta->getCodConta();?>">
                  <img class="circle responsive-img center" id="user-img"  src="media/person2.png">
                </a>
                <?php
                  }
                ?>
                </div>
   
              </div>
              <a href="perfil.php?codConta=<?php echo $conta->getCodConta();?>">
                <?php echo $conta->getNome(); ?>
              </a>
            </div>
            <?php
              }
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