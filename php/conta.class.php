<?php
  class Conta {
    private $codConta;
    private $nome;
    private $sexo;
    private $dataNascimento;
    private $telefone;
    private $tipo;
    private $email;
    private $senha;
    private $fotoCapa;
    private $foto;
    private $descricao;
    private $curriculo;
    //CONSTRUCTOR
    public function __construct($nome, $sexo, $dataNascimento, $telefone, $tipo, $email, $senha, $fotoCapa, $foto, $descricao, $curriculo) {
      $this->nome = $nome;
      $this->sexo = $sexo;
      $this->dataNascimento = $dataNascimento;
      $this->telefone = $telefone;
      $this->tipo = $tipo;
      $this->email = $email;
      $this->senha = $senha;
      $this->fotoCapa = $fotoCapa;
      $this->foto = $foto;
      $this->descricao = $descricao;
      $this->curriculo = $curriculo;
    }
    //GETTERS
    public function getCodConta() {
      return $this->codConta;
    }
    public function getNome() {
      return $this->nome;
    }
    public function getSexo() {
      return $this->sexo;
    }
    public function getDataNascimento() {
      return $this->dataNascimento;
    }
    public function getTelefone() {
      return $this->telefone;
    }
    public function getTipo() {
      return $this->tipo;
    }
    public function getEmail() {
      return $this->email;
    }
    public function getSenha() {
      return $this->senha;
    }
    public function getFotoCapa() {
      return $this->fotoCapa;
    }
    public function getFoto() {
      return $this->foto;
    }
    public function getDescricao() {
      return $this->descricao;
    }
    public function getCurriculo() {
      return $this->curriculo;
    }
    //SETTERS
    public function setCodConta($codConta) {
      $this->codConta = $codConta;
    }
    public function setNome($nome) {
      $this->nome = $nome;
    }
    public function setSexo($sexo) {
      $this->sexo = $sexo;
    }
    public function setDataNascimento($dataNascimento) {
      $this->dataNascimento = $dataNascimento;
    }
    public function setTelefone($telefone) {
      $this->telefone = $telefone;
    }
    public function setTipo($tipo) {
      $this->tipo = $tipo;
    }
    public function setEmail($email) {
      $this->email = $email;
    }
    public function setSenha($senha) {
      $this->senha = $senha;
    }
    public function setFotoCapa($fotoCapa) {
      $this->fotoCapa = $fotoCapa;
    }
    public function setFoto($foto) {
      $this->foto = $foto;
    }
    public function setDescricao($descricao) {
      $this->descricao = $descricao;
    }
    public function setCurriculo($curriculo) {
      $this->curriculo = $curriculo;
    }
  }
?>