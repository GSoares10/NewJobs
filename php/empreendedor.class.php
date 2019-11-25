<?php
  class Empreendedor {
    private $codEmpreendedor;
    private $conta;
    //CONSTRUCTOR
    public function __construct($conta) {
      $this->conta = $conta;
    }
    //GETTERS
    public function getCodEmpreendedor() {
      return $this->codEmpreendedor;
    }
    public function getConta() {
      return $this->conta;
    }
    //SETTERS
    public function setCodEmpreendedor($codEmpreendedor) {
      $this->codEmpreendedor = $codEmpreendedor;
    }
    public function setConta($conta) {
      $this->conta = $conta;
    }
  }
?>