<?php
    require_once('php/contaDAO.php');
    require_once('php/conta.class.php');

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
    <link rel="stylesheet" href="css/register.css">
    <title>Página de Cadastro</title>
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
        <div class="row register">
            <div class="col s12 l4 offset-l4">
                    <div class="card">
                        <div class="card-action center transparent text-darken-4">
                        <h2>Cadastro</h2>
                            <div class="steps">
                                <a href="#step-1" class="orange darken-2 btn btn-primary indigo">1</a>
                            </div>
                            <div class="steps">
                                <button href="#step-2" class="orange darken-2 btn btn-default indigo" disabled="disabled">2</a>
                            </div>
                            <div class="steps">
                                <a href="#step-3" class="orange darken-2 btn btn-default indigo" disabled="disabled">3</a>
                            </div>
                            
                        </div>
                        <form action="cadastrarConta.php" method="POST">
                            <div class="card-content" id="step-1">
                                <h3>Perfil</h3>
                                <div class="input-field">
                                    <i class="material-icons prefix">person</i>
                                    <input id="nome" type="text" name="nome" class="validate" required="required">
                                    <label for="nome">Nome</label>
                                    <span class="helper-text" data-error="wrong" data-success="right"></span>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">person</i>
                                    <select name="sexo" type="text">
                                        <option value="" disabled selected>Escolha sua opção...</option>
                                        <option value="Feminino">Feminino</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Outro">Outro...</option>
                                    </select>
                                    <label>Sexo</label>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">today</i>
                                    <input type="date" id="dataNascimento" name="dataNascimento" class="validate" required="required">
                                    <label for="dataNascimento">Data Nasc.</label>
                                    <span class="helper-text" data-error="wrong" data-success="right"></span>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">phone</i>
                                    <input type="text" id="telefone" name="telefone" class="validate" required="required" maxlength="11" pattern="([0-9]{11})">
                                    <label for="telefone">Telefone</label>
                                    <span class="helper-text" data-error="wrong" data-success="right"></span>
                                </div>
                                <div class="checkbox-type-user">
                                    <p>
                                        <label>
                                            <input type="checkbox" name="tipo" value="Usuário" class="checktype">
                                            <span>Usuario</span>
                                        </label>
                                    </p>
                                    <p>
                                        <label>
                                            <input type="checkbox" name="tipo" value="Empreendedor" class="checktype">
                                            <span>Empreendedor</span>
                                        </label>
                                    </p>
                                </div>
                                <button
                                    class="orange darken-2 btn btn-primary nextBtn waves-effect waves-light btn-large z-depth-5 right indigo"
                                    type="button">Próximo</button>
                            </div>
                            <div class="card-content" id="step-2">
                                <h3>Dados</h3>
                                <div class="input-field">
                                    <i class="material-icons prefix">email</i>
                                    <input id="email" name="email" type="email" class="validate" required="required">
                                    <label for="email">Email</label>
                                    <span class="helper-text" data-error="wrong" data-success="right"></span>
                                </div>
                                <div class="input-field">
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input type="password" id="senha" name="senha" required="required">
                                    <label for="senha">Senha</label>
                                </div>
                                <button class="orange darken-2 btn btn-primary prevBtn waves-effect waves-light btn-large z-depth-5 indigo"
                                    type="button">Voltar</button>
                                <button class="orange darken-2 btn btn-primary nextBtn waves-effect waves-light btn-large z-depth-5 indigo"
                                    type="button">Próximo</button>
                            </div>
                            <div class="card-content" id="step-3">
                                <h3>Perfil</h3>
                                <label>Capa</label>
                                <div class="file-field">
                                    <a class="btn"><i class="material-icons">image</i></a>
                                    <div class="file-path-wrapper">
                                        <input type="text" id="fotoCapa" name="fotoCapa" class="file-path validate">
                                    </div>
                                </div>
                                <label>Foto</label>
                                <div class="file-field">
                                    <a class="btn"><i class="material-icons">image</i></a>
                                    <div class="file-path-wrapper">
                                        <input type="text" id="foto" name="foto" class="file-path validate">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="textarea" id="descricao" name="descricao" class="materialize-textarea"></textarea>
                                        <label for="textarea">Descrição</label>
                                    </div>
                                </div>
                                <label>Currículo</label>
                                <div class="file-field">
                                    <button class="btn"><i class="material-icons">attachment</i></button>
                                    <div class="file-path-wrapper">
                                        <input type="text" id="curriculo" name="curriculo" class="file-path validate">
                                    </div>
                                </div>
                                <button class="orange darken-2 btn btn-primary prevBtn waves-effect waves-light btn-large z-depth-5 indigo">Voltar</button>
                                <button
                                    class="orange darken-2 btn btn-primary nextBtn waves-effect waves-light btn-large z-depth-5 right indigo">Enviar</button>
                            </div>
                        </form>
                    </div>
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
    <script src="js/steps.js"></script>


</body>

</html>