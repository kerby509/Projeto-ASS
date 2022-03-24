<?php
include 'db.php';
//include "consulta.php";
try{
  $cpf='';
  $nome= '';
  $email= '';
  $endereco= '';
  $telefone= '';
  $senha= '';
  
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

  if(@$_POST['nome']){

      //var_dump($db);exit;
      $comando= $db->prepare("INSERT INTO funcionario(cpf,nome,email,endereco,telefone,senha) VALUES (:cpf,:nome,:email,:endereco,:telefone,:senha)");
      
      $comando->bindParam('cpf', $_POST['cpf'], PDO::PARAM_STR);
      $comando->bindParam('nome', $_POST['nome'], PDO::PARAM_STR);
      $comando->bindParam('email', $_POST['email'], PDO::PARAM_STR);
      $comando->bindParam('endereco', $_POST['endereco'], PDO::PARAM_STR);
      $comando->bindParam('telefone', $_POST['telefone'], PDO::PARAM_STR);
      $comando->bindParam('senha', $_POST['senha'], PDO::PARAM_STR);

      $comando->execute();
    }


} catch (PDOException $e) {
    echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
    exit();
}
 session_start();

 if(@$_POST['cpf']&&
    @_POST['nome']&&
   @$_POST['email']==''&&
   @$_POST['endereco']==''&&
   @$_POST['telefone']==''&&
   @_POST['senha']){
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
    <title>Cadastra Funcionário</title>
    
</head>
<body>

<br>
<!-- <h1>Cadastra Funcionário</h1> -->


<div class="container">
  <a href="index.php"><button>Voltar</button></a>
  <h1>Cadastra Funcionário</h1>

 
  <form action="cadFunc.php" method= "POST">
  <div class="row">
    <div class="col-25">
      <label for="cpf">CPF</label>
    </div>
    <div class="col-75">
      <input type="text" id="cpf" name="cpf" placeholder=" Digite cpf " required>
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
      <input type="text" id="email" name="email" placeholder="Digite o email"required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="servico">Endereço</label>
    </div>
    <div class="col-75">
      <input type="text" id="endereco" name="endereco" placeholder="Digite o endereço"required>
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

  <div class="row">
    <div class="col-25">
      <label for="telefone">Senha</label>
    </div>
    <div class="col-75">
      <input type="Password" id="senha" name="senha" placeholder="password"required>
    </div>
    
  </div>
  <br>
  <br>
  <div class="row">
    <input type="submit" value="Cadastra Funcionário" name="update"/>
  </div>
  </form>
</div>

</body>
</html>