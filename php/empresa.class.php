<?php
  class Empresa {
    private $cnpj;
    private $empreendedor;
    private $nome;
    private $tipo;

    public function __construct($empreendedor, $nome, $tipo) {
      $this->empreendedor = $empreendedor;
      $this->nome = $nome;
      $this->tipo = $tipo;
    }
    //GETTERS
    public function getCNPJ() {
      return $this->cnpj;
    }
    public function getEmpreendedor() {
      return $this->empreendedor;
    }
    public function getNome() {
      return $this->nome;
    }
    public function getTipo() {
      return $this->tipo;
    }
    //SETTERS
    public function setCNPJ($cnpj) {
      $this->cnpj = $cnpj;
    }
    public function setEmpreendedor($empreendedor) {
      $this->empreendedor = $empreendedor;
    }
    public function setNome($nome) {
      $this->nome = $nome;
    }
    public function setTipo($tipo) {
      $this->tipo = $tipo;
    }
  }
?>