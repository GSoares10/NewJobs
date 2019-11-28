<?php
require_once('php/postDAO.php');
require_once('php/post.class.php');
require_once('php/contaDAO.php');
require_once('php/conta.class.php');

$codConta = intval($_POST['codConta']);

$contaDAO = new ContaDAO();
$conta = $contaDAO->buscarConta($codConta);
$flag = isset($_POST['codPost']); // Verifica se tem o código da postagem.
$post = new Post($conta, $_POST['descricao'], $_POST['arquivo']);
$postDAO = new PostDAO();

if($flag) {
  $post->setCodPost(intval($_POST['codPost']));
  $postDAO->alterarPost($orc);
}else{
  $postDAO->inserirPost($post);
}

header("Location: principal.php")
?>