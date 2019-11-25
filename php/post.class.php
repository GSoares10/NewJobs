<?php
  class Post {
    private $codPost;
    private $conta;
    private $arquivo;
    private $descricao;
    //CONSTRUCTOR
    public function __construct($conta, $arquivo, $descricao) {
      $this->conta = $conta;
      $this->arquivo = $arquivo;
      $this->descricao = $descricao;
    }
    //GETTERS
    public function getCodPost() {
      return $this->codPost;
    }
    public function getConta() {
      return $this->conta;
    }
    public function getArquivo() {
      return $this->arquivo;
    }
    public function getDescricao() {
      return $this->descricao;
    }
    //SETTERS
    public function setCodPost($codPost) {
      $this->codPost = $codPost;
    }
    public function setConta($conta) {
      $this->conta = $conta;
    }
    public function setArquivo($arquivo) {
      $this->arquivo = $arquivo;
    }
    public function setDescricao($descricao) {
      $this->descricao = $descricao;
    }
  }
?>