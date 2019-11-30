<?php
    require_once('php/conta.class.php');
    require_once('php/contaDAO.php');
    require_once('php/post.class.php');
    require_once('php/postDAO.php');

    $contaDAO = new ContaDAO();
    $codConta = 1; // PARA TESTES, POIS NÃO SE TEM CONTROLE DE SESSÃO
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Import Free Font Awesome Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!--Import my Styles.css-->
    <link rel="stylesheet" href="css/principal.css">
    <title>Principal</title>
</head>

<body>
    <!--navbar-->
    <header>
        <ul class="sidenav sidenav-fixed hide-on-med-and-down">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img class="responsive-img" src="media/parallax.jpg">
                    </div>
                    <?php 
                        if($conta->getSexo() == 'Masculino') {
                    ?>
                    <img class="circle responsive-img" src="media/person.png">
                    <?php
                        }else if($conta->getSexo() == 'Feminino') {
                    ?>
                    <img class="circle responsive-img" src="media/person2.png">
                    <?php
                        }
                    ?>
                    <a href="perfil.php">
                        <span class="white-text name"><?php echo $conta->getNome();?></span>
                    </a>
                    <a href="#email">
                        <span class="white-text name"><?php echo $conta->getEmail();?></span>
                    </a>
                </div>
            </li>
            <li>
                <a href="perfil.php?codConta=<?php echo$conta->getCodConta(); ?>">
                    <i class="material-icons perfil">person</i>
                    <span class="text file">Perfil</span>
                </a>
            </li>
            <li>
                <a href="#arquivos">
                    <i class="material-icons folder-saved">folder</i>
                    <span class="text file">Salvos</span>
                </a>
            </li>
            <li>
                <a href="login.php">
                    <i class="material-icons sair">arrow_forward</i>
                    <span class="text sair">Sair</span>
                </a>
            </li>
            <li>
                <a class='dropdown-trigger dropA' href='#' data-target='dropdown1'>
                <i class="material-icons">settings_applications</i>
                <span class="text file">Configurações</span>
                </a>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="cadastroConta.php?codConta=<?php echo $conta->getCodConta();?>"><i class="material-icons">edit</i>Editar Perfil</a></li>
                    <li><a href="excluirConta.php?codConta=<?php echo $conta->getCodConta();?>"><i class="material-icons">delete</i>Excluir Conta</a></li>
                </ul>
            </li>
        </ul>
        <ul class="sidenav" id="mobile-menu">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img class="responsive-img" src="media/parallax.jpg">
                    </div>
                    <?php 
                        if($conta->getSexo() == 'Masculino') {
                    ?>
                    <img class="circle responsive-img" src="media/person.png">
                    <?php
                        }else if($conta->getSexo() == 'Feminino') {
                    ?>
                    <img class="circle responsive-img" src="media/person2.png">
                    <?php
                        }
                    ?>
                    <a href="perfil.php">
                        <span class="white-text name"><?php echo $conta->getNome();?></span>
                    </a>
                    <a href="#email">
                        <span class="white-text name"><?php echo $conta->getEmail();?></span>
                    </a>
                </div>
            </li>
            <li>
                <a href="perfil.php">
                    <i class="material-icons perfil">person</i>
                    <span class="text file">Perfil</span>
                </a>
            </li>
            <li>
                <a href="#arquivos">
                    <i class="material-icons folder-saved">folder</i>
                    <span class="text file">Salvos</span>
                </a>
            </li>
            <li>
                <a href="login.html">
                    <i class="material-icons sair">arrow_forward</i>
                    <span class="text sair">Sair</span>
                </a>
            </li>
            <li>
                <a class='dropdown-trigger dropA' href='#' data-target='dropdown2'>
                <i class="material-icons">settings_applications</i>
                <span class="text file">Configurações</span>
                </a>
                <ul id='dropdown2' class='dropdown-content'>
                    <li><a href="cadastroConta.php?codConta=<?php echo $conta->getCodConta();?>"><i class="material-icons">edit</i>Editar Perfil</a></li>
                    <li><a href="excluirConta.php?codConta=<?php echo $conta->getCodConta();?>"><i class="material-icons">delete</i>Excluir Conta</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <main>
        <nav class="nav-warraper orange darken-2">
            <a href="principal.php" class="center brand-logo">Logo</a>
            <a href="#menu" class="sidenav-trigger" data-target="mobile-menu">
                <i class="material-icons">menu</i>
            </a>
            <ul class="pesquisa right">
                <li>
                    <a href="#modal1" class="modal-trigger tooltipped btn-large white-text transparent" data-tooltip="Pesquisar">
                        <i class="material-icons">search</i>
                    </a>
                </li>
            </ul>
        </nav>
        <div id="modal1" class="modal">
            <div class="modal-content">
            <h4>Pesquisa</h4>
            <form action="pesquisa.php" method="POST">
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
            </div>
            <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-red btn-flat">Fechar</a>
            </div>
        </div>

        <script src="js/jQuery.js"></script>