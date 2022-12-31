<?php

$sql_pessoas = "SELECT * FROM pessoas WHERE pstatus = 's'";
$result_pessoas = mysqli_query($conn, $sql_pessoas);
$row_pessoas = mysqli_fetch_assoc($result_pessoas);

class Pessoas {
  // Properties
   $codmil;
   $grad;
   $rg;
   $nomeguerra;
   $nome;
   $contato;
   $img;
   $pstatus;
   $login;
   $senha;

   function __construct(
      $grad,
      $rg,
      $nomeguerra,
      $nome,
      $contato,
      $img,
      $pstatus,
      $login,
      $senha
   ) 

   {
      $this->name = $name;
      $this->color = $color;
      $this->grad = $grad,
      $this->rg = $rg,
      $this->nomeguerra = $nomeguerra,
      $this->nome = $nome,
      $this->contato = $contato,
      $this->img = $img,
      $this->pstatus = $pstatus,
      $this->login = $login,
      $this->senha = $senha
  }

  // Methods
  function setCodmil($codmil) {
    $this->codmil = $codmil;
  }
  function getCodmil() {
    return $this->codmil;
  }
    function setGrad($grad) {
    $this->grad = $grad;
  }
  function getGrad() {
    return $this->codmil;
  }
    function setRg($rg) {
    $this->rg = $rg;
  }
  function getRg() {
    return $this->rg;
  }
    function setNomeguerr($nomeguerra) {
    $this->nomeguerra = $nomeguerra;
  }
  function getNomeguerr() {
    return $this->nomeguerra;
  }
    function setNome($nome) {
    $this->nome = $nome;
  }
  function getNome() {
    return $this->nome;
  }
    function setContato($contato) {
    $this->contato = $contato;
  }
  function getContato() {
    return $this->contato;
  }
    function setImg($img) {
    $this->img = $img;
  }
  function getImg() {
    return $this->img;
  }
    function setCodmil($pstatus) {
    $this->pstatus = $pstatus;
  }
  function getCodmil() {
    return $this->pstatus;
  }
      function setLogin($login) {
    $this->login = $login;
  }
  function getLogin() {
    return $this->login;
  }

    function setSenha($senha) {
    $this->senha = $senha;
  }
  function getSenha() {
    return $this->senha;
  }

  function selectPessoas {

  }

}

$pessoa = new Pessoas();
$pessoa->set_name('Apple');








echo $apple->get_name();
echo "<br>";
echo $banana->get_name();

         $sql_pessoas = "SELECT * FROM pessoas WHERE status = 's'";
         $result_pessoas = mysqli_query($conn, $sql_pessoas);
         $row_pessoas = mysqli_fetch_assoc($result_pessoas);
            
            if (isset($_GET['iddetmp'])) {
               $iddetmp = $_GET['iddetmp'];
               $sql_pessoas = "SELECT codmil, nomeguerra FROM pessoas, detmapa WHERE iddetmp=$iddetmp AND idpessoa = codmil";
              } else { $sql_pessoas = "SELECT codmil, nomeguerra FROM pessoas WHERE idpessoa = codmil AND status='s'"; }        


;?>