<?php

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
    <link rel="stylesheet" href="css/login.css">
    <title>Página de Login</title>
</head>

<body>
    <!-- navbar -->
    <div class="header">
        <nav class="nav-wrapper transparent">
            <div class="container">
                <a href="index.html" class="brand-logo center">Logo</a>
                <a href="" class="sidenav-trigger" data-target="mobile-menu">
                    <i class="material-icons">menu</i>
                </a>
                <ul class="sidenav grey lighten-2" id="mobile-menu">
                    <li><a href="index.html">Página Principal</a></li>

                </ul>
            </div>
        </nav>
        <div class="row login">
            <div class="col s12 l4 offset-l4">
                <form action="" method="POST">
                    <div class="card">
                        <div class="card-action center transparent text-darken-4 ">
                            <h2>Entrar</h2>
                        </div>
                        <div class="card-content">
                            <div class="input-field">
                                <i class="material-icons prefix">email</i>
                                <input id="email" name="email" type="email" class="validate">
                                <label for="email">Email</label>
                                <span class="helper-text" data-error="wrong" data-success="correto"></span>
                            </div>
                            <div class="input-field">
                                <i class="material-icons prefix">vpn_key</i>
                                <input type="password" id="senha" name="senha">
                                <label for="senha">Senha</label>
                            </div>
                            <p>
                                <label>
                                    <input type="checkbox" id="remember" name="remember">
                                    <span>Lembre-me</span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    <a href="cadastroConta.php" class="helper-text register-link">Cadastre-se.</a>
                                </label>
                            </p>
                            <div class="login-btn center">
                                <a href="principal.php" class="orange darken-2 btn-large indigo" type="submit">Login</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="page-footer grey darken-4">
        <div class="footer-copyright grey darken-4">
            <div class="container center-align">&copy; 2019 G.S</div>
        </div>
    </footer>

    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!-- My Scripts-->
    <script src="js/main.js"></script>
    <script src="js/jQuery.js"></script>

</body>

</html>