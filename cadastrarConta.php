<?php
  require_once('php/contaDAO.php');
  require_once('php/conta.class.php');

  $codConta = isset($_POST['codConta']);
  $data = new DateTime($_POST['dataNascimento']);
  $conta = new Conta($_POST['nome'],$_POST['sexo'],$data,$_POST['telefone'],$_POST['tipo'],$_POST['email'],$_POST['senha'],$_POST['fotoCapa'], $_POST['foto'],$_POST['descricao'],$_POST['curriculo']);
  $contaDAO = new ContaDAO();
  
  if($codConta) {
    $conta->setCodConta(intval($_POST['codConta']));
    $contaDAO->alterarConta($conta);
  }else{
    $contaDAO->inserirConta($conta);
  }

header("Location: login.php");
?>