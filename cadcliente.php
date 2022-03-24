<?php

include 'db.php';
//include "consulta.php";
try{
  $nome= '';
  $cpf= '';
  $telefone= '';
  $datadeentrega= '';
  $modelo= '';
  $sercicos='';

  
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

  if(@$_POST['nome']){

      //var_dump($db);exit;
      $comando= $db->prepare("INSERT INTO usuarios(nome,cpf,telefone,datadeentrega,modelo,servicos) VALUES (:nome,:cpf,:telefone,:datadeentrega,:modelo,:servicos)");
      
      $comando->bindParam('nome', $_POST['nome'], PDO::PARAM_STR);
      $comando->bindParam('cpf', $_POST['cpf'], PDO::PARAM_STR);
      $comando->bindParam('telefone', $_POST['telefone'], PDO::PARAM_STR);
      $comando->bindParam('datadeentrega', $_POST['data_de_entrega']);
      $comando->bindParam('modelo', $_POST['modelo'], PDO::PARAM_STR);
      $comando->bindParam('servicos', $_POST['servicos'], PDO::PARAM_STR);
      $comando->execute();
    }


} catch (PDOException $e) {
    echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
    exit();
}
 session_start();

 if(@$_POST['nome']&&
//   //@_POST['email']&&
   @$_POST['cpf']==''&&
   @$_POST['telefone']==''&&
   @$_POST['data de entrega']==''&&
   @$_POST['modelo']==''&&
   @$_POST['servicos']==''){
//   //@_POST['senha']){
       $_SESSION['autenticados']=1;
       header('Location: index.php');
       exit();

   }



?>

<<<<<<< HEAD
=======
<<<<<<< HEAD
 
=======
 <!-- <form className="form" action="cadcliente.php" method="post" >
<table width="80%" border="0" cellspacing="0" cellpadding="0" align="center">
        
    <div align="center">
    <h1>Cadastra Cliente</h1>

    <tr>
     <td width="24%" height="25"><font face="Arial" size="2">Nome:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <input type="text" name="nome" size="20"></font></td>
    </tr>

    
    <tr>
     <td height="25" width="24%"><font face="Arial" size="2">CPF:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <input type="text" name="cpf" size="20"></font></td>
    </tr>


    <tr>
     <td height="25" width="24%"><font face="Arial" size="2">Telefone:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <input type="text" name="telefone" size="20"></font></td>
    </tr>

    <tr>
     <td height="25" width="24%"><font face="Arial" size="2">Date de entrega:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <input type="date" name="data de entrega"
        placeholder="dd-mm-yyyy" value=""
        min="1997-01-01" max="2030-12-31">
      
     
    </tr>

    <tr>
     <td height="25" width="24%"><font face="Arial" size="2">Modelo:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <input type="text" name="modelo" size="20"></font></td>
    </tr>

    <tr>
     <td height="25" width="24%"><font face="Arial" size="2">Serviços:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <input type="text" name="serviços" size="20"></font></td>
    </tr>


    <tr>
     <td height="30" colspan="2">
     <text-align="center">
     <input type="submit"name="cadastrar" value="Cadastrar cliente &gt;&gt;"/>
     
    </tr>
   </table> 
   </form> -->
>>>>>>> 36464cde390ab656f8b319b945242eade4dae75d
>>>>>>> b290c42dcc8158386083df1e0a811acd37a8c8a8
   
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
<!-- <h1>Cadastra Cliente</h1> -->


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

  <div class="row">
    <div class="col-25">
      <label for="telefone">Data Entrega</label>
    </div>
    <div class="col-75">
      <input type="date" id="data de entrega" name="data de entrega" placeholder="dd-mm-yyyy"required>
    </div>
    
  </div>

  <div class="row">
    <div class="col-25">
      <label for="modelo">Modelo</label>
    </div>
    <div class="col-75">
      <input type="text" id="modelo" name="modelo" placeholder="Digite o modelo"required>
    </div>
  </div>


  <div class="row">
    <div class="col-25">
      <label for="servico">Serviços</label>
    </div>
    <div class="col-75">
      <input type="text" id="servicos" name="servicos" placeholder="Digite o serviço realizado" required>
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




 