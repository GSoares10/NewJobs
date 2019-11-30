<?php
require_once('php/contaDAO.php');
require_once('php/conta.class.php');

  $pesquisa = $_POST['campoPesquisa'];
  $contaDAO = new ContaDAO();
  $pesquisas = $contaDAO->Pesquisa($pesquisa, 10, 0);
//header("Location: pesquisa.php");
?>