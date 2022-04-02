<?php

include 'db.php';
try{
  $cpf= '';
  $nome= '';
  $servicos='';
  $pagamento= '';



  

  if(@$_POST['cpf']){

      $comando= $db->prepare("INSERT INTO pag (cpf,nome,servicos,pagamento) VALUES (:cpf,:nome,:servicos,:pagamento)");
      
    
      $comando->bindParam('cpf', $_POST['cpf'], PDO::PARAM_STR);
      $comando->bindParam('nome', $_POST['nome']);
      $comando->bindParam('servicos', $_POST['servicos'], PDO::PARAM_STR);
      $comando->bindParam('pagamento', $_POST['pagamento'], PDO::PARAM_STR);
      $comando->execute();
    }


} catch (PDOException $e) {
    echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
    exit();
}
 session_start();

 if( @$_POST['cpf']==''&&
   @$_POST['nome']==''&&
   @$_POST['servicos']==''&&
   @$_POST['pagamento']==''){



   
}


?>


<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="caixa.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagamento</title>
    
</head>
<body>

<br>


<div class="container">
  <a href="index.php"><button>Voltar</button></a>
  <h1>Registra Pagamento</h1>

 
  <form action="pagamento.php" method= "POST">
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
      <label for="servico">Serviços</label>
    </div>
    <div class="col-75">
      <input type="text" id="servicos" name="servicos" placeholder="Digite o serviço realizado" required>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="pagamento">F.Pagamento</label>
    </div>
    <div class="col-75">
      <select id="pagamento" name="pagamento">
        <option value="avista">Á Vista</option>
        <option value="Boleto">Boleto</option>
        <option value="Credito">Crédito</option>
        <option value="Pix">Pix</option>

       
      </select>
    </div>
    
  </div>
   

  
  <br>
  <br>
  <div class="row">
    <input type="submit" value="Pagamento" name="update"/>
  </div>
  </form>
</div>

</body>
</html>