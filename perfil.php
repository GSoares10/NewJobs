<?php
    require_once('front/header.php');
    $codConta = $_GET['codConta'];

    if($codConta != 0){
      $codConta = $_GET['codConta'];
      $contaDAO = new ContaDAO();
      $conta = $contaDAO->buscarConta(intval($codConta));
    }
?>


<div class="container">
  <div class="card grey lighten-5 z-depth-1">
    <div class="row">
      <div class="col s12">
        <div class="user-view">
          <div class="background">
            <img class="responsive-img" id="user-back" src="media/parallax.jpg">
          </div>
          <div class="user-photo">
            <?php 
              if($conta->getSexo() == 'Masculino') {
            ?>
            <img class="circle responsive-img" id="user-img"  src="media/person.png">
            <?php
              }else if($conta->getSexo() == 'Feminino') {
            ?>
            <img class="circle responsive-img" id="user-img"  src="media/person2.png">
            <?php
              }
            ?>
            <a href="#use">
              <span class="white-text"><?php echo $conta->getNome();?></span>
            </a>
          </div>
          
        </div>
        <div class="user-content card z-depth-1">
          <ul class="collapsible">
            <li>
              <div class="collapsible-header"><i class="material-icons">description</i>Sobre mim</div>
              <div class="collapsible-body">
                <a href="#edit_perfil-descricao" class="right"> 
                  <i class="material-icons">edit</i>
                </a>
                <span>
                  <?php 
                  if($conta->getDescricao() == null) {
                    echo "Adicione uma descrição para conhecerem você melhor!";
                  }else{
                    echo $conta->getDescricao();
                  }
                  ?>
                </span>
              </div>
            </li>
            <li>
              <div class="collapsible-header"><i class="material-icons">cloud_upload</i>Documento</div>
              <div class="collapsible-body">
                <a href="#edit_perfil-descricao" class="right"> 
                  <i class="material-icons">edit</i>
                </a>
                <span>
                <?php 
                  if($conta->getCurriculo() == null) {
                    echo "Adicone um Currículo com suas informações gerais!";
                  }else{
                    echo $conta->getCurriculo();
                  }
                  ?>
                </span>
              </div>
            </li>
            <?php
              if($codConta != 0) {
                if($conta->getTipo() == 'Empreendedor') {
            ?>
            <li>
              <div class="collapsible-header"><i class="material-icons">create</i>Cadastrar empresa</div>
              <div class="collapsible-body">
                <span>Lorem ipsum dolor sit amet.</span>
                <div class="user-register-emp center">
                  <a href="#" class="tooltipped" data-tooltip="Empresa">
                    <i class="fas fa-building large"></i>
                  </a>
                  <div id="btn-icon-emp">
                    <a href="#" class="btn-large orange darken-2">
                      Cadastrar
                    </a>
                  </div>
                </div>
            </div>
            </li>
            <?php
                }
              }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer center">
    <span>&copy; 2019 G.S</span>
  </div>
</div>

<?php include_once("front/footer.php");?>