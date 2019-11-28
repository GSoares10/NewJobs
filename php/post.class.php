<?php
  class Post {
    private $codPost;
    private $conta;
    private $descricao;
    private $arquivo;
    //CONSTRUCTOR
    public function __construct($conta,$descricao, $arquivo) {
      $this->conta = $conta;
      $this->descricao = $descricao;
      $this->arquivo = $arquivo;
    }
    //GETTERS
    public function getCodPost() {
      return $this->codPost;
    }
    public function getConta() {
      return $this->conta;
    }
    public function getDescricao() {
      return $this->descricao;
    }
    public function getArquivo() {
      return $this->arquivo;
    }
    //SETTERS
    public function setCodPost($codPost) {
      $this->codPost = $codPost;
    }
    public function setConta($conta) {
      $this->conta = $conta;
    }
    public function setDescricao($descricao) {
      $this->descricao = $descricao;
    }
    public function setArquivo($arquivo) {
      $this->arquivo = $arquivo;
    }
  }
?>