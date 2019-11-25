<?php
  class ContaDAO {
    //CONEXÃO
    private function getConexao() {
      $con = new PDO("pgsql:host=localhost;dbname=NewJobs;port=5432",
      "postgres", "kgi11030319");
      return $con;
    }
    //LISTA
    public function listarConta($limit, $offset) {
      $con = $this->getConexao();
      $sql = 'SELECT * FROM "Conta" LIMIT ? OFFSET ?';
      $stm = $con->prepare($sql);
      $stm->bindValue(1, $limit);
      $stm->bindValue(2, $offset);
      $res = $stm->execute();
      $listConta = array();
      if($res) {
        while($linha = $stm->fetch(PDO::FETCH_ASSOC)) {
          $conta = new Conta($linha['nome'], $linha['sexo'], new DateTime($linha['dataNascimento']), $linha['telefone'], $linha['tipo'], $linha['email'], $linha['senha'], $linha['fotoCapa'], $linha['foto'], $linha['descricao'], $linha['curriculo']);
          array_push($listConta, $conta);
        }
      }
      $stm->closeCursor();
      $stm = NULL;
      $con = NULL;
      return $listConta;
    }
    //BUSCA
    public function buscarConta($codConta) {
      $con = $this->getConexao();
      $sql = 'SELECT * FROM "Conta" WHERE codConta = ?';
      $stm = $con->prepare($sql);
      $stm->bindValue(1, $codConta);
      $res = $stm->execute();
      if($res) {
        $linha = $stm->fetch(PDO::FETCH_ASSOC);
        $conta = new Conta($linha['nome'], $linha['sexo'], new DateTime($linha['dataNascimento']), $linha['telefone'], $linha['tipo'], $linha['email'], $linha['senha'], $linha['fotoCapa'], $linha['foto'], $linha['descricao'], $linha['curriculo']);
      }else{
        $conta = $res;
        echo $stm->queryString;
        var_dump($stm->errorInfo());
      }
      $stm->closeCursor();
      $stm = NULL;
      $con = NULL;
      return $conta;
    }
    //INSERE
    public function inserirConta($conta) {
      $con = $this->getConexao();
      $sql = 'INSERT INTO "Conta" ("nome", "sexo", "dataNascimento", "telefone", "tipo", "email", "senha", "fotoCapa", "foto", "descricao", "curriculo") VALUES (?,?,?,?,?,?,?,?,?,?,?)';
      $stm = $con->prepare($sql);
      $stm->bindValue(1, $conta->getNome());
      $stm->bindValue(2, $conta->getSexo());
      $stm->bindValue(3, $conta->getDataNascimento()->format('Y-m-d'));
      $stm->bindValue(4, $conta->getTelefone());
      $stm->bindValue(5, $conta->getTipo());
      $stm->bindValue(6, $conta->getEmail());
      $stm->bindValue(7, $conta->getSenha());
      $stm->bindValue(8, $conta->getFotoCapa());
      $stm->bindValue(9, $conta->getFoto());
      $stm->bindValue(10, $conta->getDescricao());
      $stm->bindValue(11, $conta->getCurriculo());
      $res = $stm->execute();
      if($res) {
        $linha = $res;
        $conta->setCodConta(intval($linha['codConta']));
      }else{
        echo $stm->queryString;
			  var_dump($stm->errorInfo());
      }
      $stm->closeCursor();
      $stm = NULL;
      $con = NULL;
      return $res;
    }
    //EXCLUI
    public function excluirConta($codConta) {
      $con = $this->getConexao();
      $sql = 'DELETE FROM "Conta" WHERE codConta = ?';
      $stm = $con->prepare($sql);
      $stm->bindValue(1, $codConta);
      $res = $stm->execute();
      if(!$res) {
        echo $stm->queryString;
        var_dump($stm->errorInfo());
      }
      $stm->closeCursor();
      $stm = NULL;
      $con = NULL;
      return $res;
    }
    //ALTERA DADOS GENÉRICOS
    public function alterarDadosGenericos($conta) {
      $con = $this->getConexao();
      $sql = 'UPDATE "Conta" SET "nome" = ?, "sexo" = ?, "dataNascimento" = ?, "telefone" = ?';
      $stm = $con->prepare($sql);
      $stm->bindValue(1, $conta->getNome());
      $stm->bindValue(2, $conta->getSexo());
      $stm->bindValue(3, $conta->getDataNascimento());
      $stm->bindValue(4, $conta->getTelefone());
      $res = $stm->execute();
      if(!$res){
        echo $stm->queryString;
        var_dump($stm->errorInfo());
      }
      $stm->closeCursor();
      $stm = NULL;
      $con = NULL;
      return $res;
    }
    //ALTERA DESCRICAO
    public function alterarDescricao($conta) {
      $con = $this->getConexao();
      $sql = 'UPDATE "Conta" SET "descricao = ?"';
      $stm = $con->prepare($sql);
      $stm->bindValue(1, $conta->getDescricao());
      $res = $stm->execute();
      if(!$res) {
        echo $stm->queryString;
        var_dump($stm->errorInfo());
      }
      $stm->closeCursor();
      
    }
  }
?>