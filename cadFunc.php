<?php
//include 'db.php';


session_start();

if(@$_POST['cpf']&&
  @_POST['nome']&&
  @$_POST['email']&&
  @$_POST['endereco']&&
  @$_POST['telefone']&&
  @_POST['senha']){
    $sql=$db->prepare("INSERT INTO usuarios(cpf,nome,email,endereco,telefone) VALUES (:cpf,:nome,:email,:endereco,:telefone)");
    $sql->bindParam('cpf', $_POST['cpf'], PDO::PARAM_STR);
    $sql->bindParam('nome', $_POST['nome'], PDO::PARAM_STR);
    $sql->bindParam('email', $_POST['email'], PDO::PARAM_STR);
    $sql->bindParam('endereco', $_POST['endereco'], PDO::PARAM_STR);
    $sql->bindParam('telefone', $_POST['telefone']);
    $sql->bindParam('senha', $_POST['senha'], PDO::PARAM_STR);

    $sql->execute();

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
<h1>Cadastra Funcionário</h1>


<div class="container">
  <a href="index.php"><button>Voltar</button></a>
 
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