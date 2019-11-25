<?php
  class Endereco {
    private $codEndereco;
    private $empresa;
    private $rua;
    private $bairro;
    private $numero;
    private $cidade;
    private $pais;
    //CONSTRUCTOR
    public function __construct($empresa, $rua, $bairro, $numero, $cidade, $pais) {
      $this->empresa = $empresa;
      $this->rua = $rua;
      $this->bairro = $bairro;
      $this->numero = $numero;
      $this->cidade = $cidade;
      $this->pais = $pais;
    }
    //GETTERS
    public function getCodEndereco() {
      return $this->codEndereco;
    }
    public function getEmpresa() {
      return $this->empresa;
    }
    public function getRua() {
      return $this->rua;
    }
    public function getBairro() {
      return $this->bairro;
    }
    public function getNumero() {
      return $this->numero;
    }
    public function getCidade() {
      return $this->cidade;
    }
    public function getPais() {
      return $this->pais;
    }
    //SETTERS
    public function setCodEndereco($codEndereco) {
      $this->codEndereco = $codEndereco;
    }
    public function setEmpresa($empresa) {
      $this->empresa = $empresa;
    }
    public function setRua($rua) {
      $this->rua = $rua;
    }
    public function setBairro($bairro) {
      $this->bairro = $bairro;
    }
    public function setNumero($numero) {
      $this->numero = $numero;
    }
    public function setCidade($cidade) {
      $this->cidade = $cidade;
    }
    public function setPais($pais) {
      $this->pais = $pais;
    }
  }
?>