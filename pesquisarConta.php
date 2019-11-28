<?php
require_once('php/contaDAO.php');
require_once('php/conta.class.php');

  $filtroPesquisa = $_POST['filtroPesquisa'];
  $listAvancada = $contaDAO->listarAvancado($filtroPesquisa,10,0);
  var_dump($listAvancada);
  if($filtroPesquisa != '') {
    foreach($listAvancada as $conta) {
      echo $conta->getNome();
      echo $conta->getTipo();
    }
  }else{
    $listConta = $contaDAO->listarConta(10,0);
  }
//header("Location: pesquisa.php");
?>