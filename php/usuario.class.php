<?php
  class Usuario {
    private $codUsuario;
    private $conta;
    //CONSTRUCTOR
    public function __construct($conta) {
      $this->conta = $conta;
    }
    //GETTERS
    public function getCodUsuario() {
      return $this->codUsuario;
    }
    public function getConta() {
      return $this->conta;
    }
    //SETTERS
    public function setCodUsuario($codUsuario) {
      $this->codUsuario = $codUsuario;
    }
    public function setConta($conta) {
      $this->conta = $conta;
    }
  }
?>