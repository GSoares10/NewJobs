<?php
    require_once('front/header.php');
?>


<div class="container">
  <div class="card grey lighten-4 z-depth-1">
    <div class="row">
      <div class="col s12">
        <div class="user-view">
          <div class="background">
            <img class="responsive-img" id="user-back" src="media/cityscape.jpg">
          </div>
          <div class="user-photo">
            <img class="circle responsive-img" id="user-img" src="media/portrait.jpg">
            <a href="#use">
              <span class="white-text">User Tester</span>
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
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, quos doloribus. Nulla et iure natus cumque autem nesciunt perspiciatis maiores repudiandae facilis, assumenda saepe ex cum fuga esse voluptatem aliquid!.
                </span>
              </div>
            </li>
            <li>
              <div class="collapsible-header"><i class="material-icons">cloud_upload</i>Documento</div>
              <div class="collapsible-body">
                <a href="#edit_perfil-descricao" class="right"> 
                  <i class="material-icons">edit</i>
                </a>
                <span>Lorem ipsum dolor sit amet.</span>
              </div>
            </li>
            <li>
              <div class="collapsible-header"><i class="material-icons">create</i>Cadastrar empresa</div>
              <div class="collapsible-body">
                <span>Lorem ipsum dolor sit amet.</span>
                <div class="user-register-emp center">
                  <a href="#" class="tooltipped" data-tooltip="Empresa">
                    <i class="fas fa-building large"></i>
                  </a>
                  <div id="btn-icon-emp">
                    <a href="#" class="btn-large">
                      Cadastrar
                    </a>
                  </div>
                </div>
            </div>
            </li>
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