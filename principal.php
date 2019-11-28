<?php
    require_once('front/header.php');
    require_once('php/conta.class.php');
    require_once('php/contaDAO.php');
    require_once('php/post.class.php');
    require_once('php/postDAO.php');
    //
    $contaDAO = new ContaDAO();
    $postDAO = new PostDAO();
    $listPost = $postDAO->listarPost(10, 0);
    //
    $codPost = isset($_POST['codPost']);
    if($codPost) {
        $codPost = $_POST['codPost'];
        $postDAO = new PostDAO();
        $post = $postDAO->buscarPost(intval($codPost));
    }
?>

<div class="container">
    <div class="card grey lighten-5 z-depth-1">
        <div class="row">
            <div class="col s12 l10 post-to-pub offset-l1">
                <div class="card">
                    <form action="cadastrarPost.php" method="POST">
                        <div class="col s12">
                            <select name="codConta">
                                <option value="<?= $conta->getCodConta(); ?>">
                                    <?php echo $conta->getNome()." (".$conta->getCodConta().")"; ?>
                                </option>
                            </select>
                        </div>
                        <?php
                            if($codConta != 0) {
                                if($conta->getTipo() == 'Empreendedor') {
                        ?>
                        <div class="card-content">
                            <div class="card-image">
                                <?php 
                                    if($conta->getSexo() == 'Masculino') {
                                ?>
                                <img class="circle responsive-img center" id="user-img"  src="media/person.png">
                                <?php
                                    }else if($conta->getSexo() == 'Feminino') {
                                ?>
                                <img class="circle responsive-img center" id="user-img"  src="media/person2.png">
                                <?php
                                    }
                                ?>
                                <a href="#userID">
                                    <?php echo $conta->getNome(); ?>
                                </a>
                            </div>
                            <textarea id="textarea2" class="materialize-textarea" name="descricao" data-length="200"
                                placeholder="Digite aqui sua proposta..."
                                value="<?php if($codPost) echo $post->getDescricao();?>"></textarea>
                            <div class="file-field">
                                <a class="btn"><i class="material-icons">image</i></a>
                                <input type="file">
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" placeholder="Anexe um arquivo"
                                        name="arquivo">
                                    <label>imagens/videos</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <ul class="center">
                                <button href="#salvar" class="btn-large tooltipped orange darken-2" data-tooltip="Publicar"
                                    onclick="M.toast({html:'Publicado!'})">
                                    <i class="material-icons">send</i>
                                </button>
                            </ul>
                        </div>
                        <?php if($codPost) {?>
                        <input type="hidden" name="codPost" value="<?php echo $post->getCodPost(); ?>">
                        <?php } ?>
                    </form>
                </div>
            </div>
            <?php
                    }
                }
            ?>
            <?php
                foreach($listPost as $post) {
            ?>
            <div class="col s12 l8 post-content offset-l2">
                <div class="card">
                    <a href="#modal1" class="modal-trigger right hide-on-med-and-up">
                        <i class="material-icons">more_horiz</i>
                    </a>
                    <div id="modal1" class="modal bottom-sheet">
                        <div class="modal-content mobile-menu">
                            <div>
                                <a href="#mensagem" class="modal-close">
                                    <i class="material-icons">mail</i>
                                    Mensagem
                                </a>
                            </div>
                            <div>
                                <a id="#interessado" class="modal-close" onclick="M.toast({html: 'Concluído!'})">
                                    <i class="material-icons">thumb_up</i>
                                    Interessado(a)
                                </a>
                            </div>
                            <div>
                                <a id="#salvar" class="modal-close" onclick="M.toast({html: 'Salvo!'})">
                                    <i class="material-icons">save</i>
                                    Salvar
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-content center">
                        <div class="card-image-user">

                            <?php 
                                if($conta->getSexo() == 'Masculino') {
                            ?>
                            <img class="circle responsive-img center" id="user-img"  src="media/person.png">
                            <?php
                                }else if($conta->getSexo() == 'Feminino') {
                            ?>
                            <img class="circle responsive-img center" id="user-img"  src="media/person2.png">
                            <?php
                                }
                            ?>
                        </div>
                        <a href="#userID">
                            <?php 
                                $codConta = $post->getConta();
                                $conta = $contaDAO->buscarConta($codConta);
                                if($conta) {
                                    echo $conta->getNome();
                                }
                            ?>
                        </a>
                    </div>
                    <div class="card-action">
                        <span class="black-text">
                            <?php echo $post->getDescricao(); ?>
                        </span>
                        <img src="media/cityscape.jpg" class="responsive-img materialboxed img-adc">
                    </div>
                    <ul class="center btns-user hide-on-med-and-down">
                        <a href="#mensagem" class="btn-large tooltipped orange darken-2" data-tooltip="Mensagem">
                            <i class="material-icons">mail</i>
                        </a>
                        <a href="#interessado" class="btn-large tooltipped orange darken-2" data-tooltip="Interessado"
                            onclick="M.toast({html: 'Concluído!'})">
                            <i class="material-icons">thumb_up</i>
                        </a>
                        <a href="#salvar" class="btn-large tooltipped orange darken-2" data-tooltip="Salvar"
                            onclick="M.toast({html: 'Salvo!'})">
                            <i class="material-icons">save</i>
                        </a>
                    </ul>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <ul class="pagination center">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="active orange darken-2"><a href="#!">1</a></li>
        <li class="waves-effect"><a href="#!">2</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!">4</a></li>
        <li class="waves-effect"><a href="#!">5</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
    </ul>
</div>
</div>
<div class="footer center">
    <span>&copy; 2019 G.S</span>
</div>
</div>

<?php include_once("front/footer.php");?>