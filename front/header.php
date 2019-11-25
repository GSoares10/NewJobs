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
                        <img class="responsive-img" src="media/cityscape.jpg">
                    </div>
                    <img class="circle responsive-img" src="media/portrait.jpg">
                    <a href="perfil.php">
                        <span class="white-text name">User Tester</span>
                    </a>
                    <a href="#email">
                        <span class="white-text name">user@example.com</span>
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
        </ul>
        <ul class="sidenav" id="mobile-menu">
            <li>
                <div class="user-view">
                    <div class="background">
                        <img class="responsive-img" src="media/cityscape.jpg">
                    </div>
                    <img class="circle responsive-img" src="media/portrait.jpg">
                    <a href="perfil.php">
                        <span class="white-text name">User Tester</span>
                    </a>
                    <a href="#email">
                        <span class="white-text name">user@example.com</span>
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
        </ul>
    </header>
    <main>
        <nav class="nav-warraper">
            <a href="principal.php" class="center brand-logo">Logo</a>
            <a href="#menu" class="sidenav-trigger" data-target="mobile-menu">
                <i class="material-icons">menu</i>
            </a>
            <ul class="pesquisa right">
                <li>
                    <a href="pesquisa.php">
                        <i class="material-icons">search</i>
                    </a>
                </li>
            </ul>
        </nav>