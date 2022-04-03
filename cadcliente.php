<?php

include 'db.php';
//include "consulta.php";
try{
  $nome= '';
  $cpf= '';
  $email='';
  $telefone= '';
  
  // $datadeentrega= '';
  // $modelo= '';
  // $sercicos='';

  
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

  if(@$_POST['cpf']){

      //var_dump($db);exit;
      $comando= $db->prepare("INSERT INTO usuarios(nome,cpf,email,telefone) VALUES (:nome,:cpf,:email,:telefone)");
      
      $comando->bindParam('nome', $_POST['nome'], PDO::PARAM_STR);
      $comando->bindParam('cpf', $_POST['cpf'], PDO::PARAM_STR);
      $comando->bindParam('email', $_POST['email'], PDO::PARAM_STR);
      $comando->bindParam('telefone', $_POST['telefone'], PDO::PARAM_STR);
      // $comando->bindParam('datadeentrega', $_POST['data_de_entrega']);
      // $comando->bindParam('modelo', $_POST['modelo'], PDO::PARAM_STR);
      // $comando->bindParam('servicos', $_POST['servicos'], PDO::PARAM_STR);
      $comando->execute();
    }


} catch (PDOException $e) {
    echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
    exit();
}
 session_start();

 if(@$_POST['nome']&&
    @_POST['email']&&
   @$_POST['cpf']==''&&
   @$_POST['telefone']==''){
  //  @$_POST['data de entrega']==''&&
  //  @$_POST['modelo']==''&&
  //  @$_POST['servicos']==''){
//   //@_POST['senha']){
       $_SESSION['autenticados']=1;
       header('Location: index.php');
       exit();

   }

?>
   
<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="caixa.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastra Cliente</title>
    
</head>
<body>

<br>


<div class="container">
  <a href="index.php"><button>Voltar</button></a>
  <h1>Cadastra Cliente</h1>

 
  <form action="cadcliente.php" method= "POST">
  <div class="row">
    <div class="col-25">
      <label for="cpf">CPF</label>
    </div>
    <div class="col-75">
      <input type="text" id="cpf" name="cpf" placeholder=" Digite cpf "required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="nome">Nome</label>
    </div>
    <div class="col-75">
      <input type="text" id="nome" name="nome" placeholder="Digite nome"required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="modelo">E-mail</label>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="email" placeholder="Digite e-mail">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="telefone">Telefone</label>
    </div>
    <div class="col-75">
      <input type="text" id="telefone" name="telefone" placeholder="(xx)xxxxxxxxx"required>
    </div>
    
  </div>

 
  <br>
  <br>
  <div class="row">
    <input type="submit" value="Cadastra Cliente" name="update"/>
  </div>
  </form>
</div>

</body>
</html>




 