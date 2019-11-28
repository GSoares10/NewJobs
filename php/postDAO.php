<?php
  class PostDAO {
    //CONEXÃO
    private function getConexao() {
      $con = new PDO("pgsql:host=localhost;dbname=NewJobs;port=5432",
      "postgres", "kgi11030319");
      return $con;
    }
    //LISTA
    public function listarPost($limit, $offset) {
      $con = $this->getConexao();
      $sql = 'SELECT * FROM "Post" LIMIT ? OFFSET ?';
      $stm = $con->prepare($sql);
      $stm->bindValue(1, $limit);
      $stm->bindValue(2, $offset);
      $res = $stm->execute();
      $listPost = array();
      if($res) {
        while($linha = $stm->fetch(PDO::FETCH_ASSOC)) {
          $post = new Post($linha['codConta'], $linha['descricao'], $linha['arquivo']);
          $post->setCodPost(intval($linha['codPost']));
          array_push($listPost, $post);
        }
      }
      $stm->closeCursor();
      $stm = NULL;
      $con = NULL;
      return $listPost;
    }
    //BUSCA
    public function buscarPost($codPost) {
      $con = $this->getConexao();
      $sql = 'SELECT * FROM "Post" INNER JOIN "Conta" USING ("codConta") WHERE "Conta"."codConta" = ?';
      $stm = $con->prepare($sql);
      $stm->bindValue(1, $codPost);
      $res = $stm->execute();
      $posts = array();
      if($res) {
        $linha = $stm->fetch(PDO::FETCH_ASSOC);
        $post = new Post($linha['codConta'], $linha['descricao'], $linha['arquivo']);
        $post->setCodPost(intval($linha['codPost']));
        array_push($posts, $post);
      }else{
        $post = $res;
        echo $stm->queryString;
        var_dump($stm->errorInfo());
      }
      $stm->closeCursor();
      $stm = NULL;
      $con = NULL;
      return $posts;
    }
    //INSERE
    public function inserirPost($post) {
      $con = $this->getConexao();
      $sql = 'INSERT INTO "Post" ("codConta", "descricao", "arquivo") VALUES (?,?,?) RETURNING "codPost"';
      $stm = $con->prepare($sql);
      $stm->bindValue(1, $post->getConta()->getCodConta(), PDO::PARAM_INT);
      $stm->bindValue(2, $post->getDescricao());
      $stm->bindValue(3, $post->getArquivo());
      $res = $stm->execute();
      if($res) {
        $linha = $res;
        $post->setCodPost(intval($linha['codPost']));
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
    public function excluirPost($codPost) {
      $con = $this->getConexao();
      $sql = 'DELETE FROM "Post" WHERE "codPost" = ?';
      $stm = $con->prepare($sql);
      $stm->bindValue(1, $codPost);
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
  }
?>