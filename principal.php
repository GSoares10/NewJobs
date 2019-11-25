<?php
    require_once('front/header.php');
?>

<div class="container">
    <div class="card grey lighten-4 z-depth-1">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-image">
                            <img src="media/portrait.jpg" id="user-img" class="circle responsive-img center">
                            <a href="#userID">User Tester</a>
                        </div>
                        <textarea id="icon_prefix2" class="materialize-textarea"
                            placeholder="Digite aqui sua proposta..."></textarea>
                        <form action="#">
                            <div class="file-field">
                                <a class="btn"><i class="material-icons">image</i></a>
                                <input type="file" multiple>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text"
                                        placeholder="Anexe um ou mais arquivos">
                                    <label>imagens/videos</label>
                                </div>
                            </div>
                        </form>

                    </div>
                    <div class="card-action">
                        <ul class="center">
                            <a href="#salvar" class="btn-large tooltipped" data-tooltip="Publicar"
                                onclick="M.toast({html: 'Publicado!'})">
                                <i class="material-icons">send</i>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col s12">
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
                            <img src="media/portrait.jpg" id="user-img" class="circle responsive-img">
                        </div>
                        <a href="#userID">User Tester</a>
                    </div>
                    <div class="card-action">
                        <span class="black-text">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officiis distinctio
                            recusandae delectus! Neque veniam qui, iste eaque sed rem accusamus voluptatibus, ea
                            nemo in eum, ipsa similique earum facilis expedita.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, voluptate!
                            Praesentium possimus voluptates minus quam repellat aliquid voluptatum ratione atque
                            a nulla, repellendus at ipsam impedit laudantium animi facilis earum.
                        </span>
                        <img src="media/cityscape.jpg" class="responsive-img materialboxed img-adc">
                    </div>
                    <ul class="center btns-user hide-on-med-and-down">
                        <a href="#mensagem" class="btn-large tooltipped" data-tooltip="Mensagem">
                            <i class="material-icons">mail</i>
                        </a>
                        <a href="#interessado" class="btn-large tooltipped" data-tooltip="Interessado"
                            onclick="M.toast({html: 'Concluído!'})">
                            <i class="material-icons">thumb_up</i>
                        </a>
                        <a href="#salvar" class="btn-large tooltipped" data-tooltip="Salvar"
                            onclick="M.toast({html: 'Salvo!'})">
                            <i class="material-icons">save</i>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <ul class="pagination center">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="active"><a href="#!">1</a></li>
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