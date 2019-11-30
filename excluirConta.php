<?php
  require_once('php/contaDAO.php');

  $codConta = $_GET['codConta'];
  $contaDAO = new ContaDAO();

  if($codConta !== null) $contaDAO->excluirConta($codConta);
  header("Location: cadastroConta.php");
?>