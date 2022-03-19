<?php


echo"Aqui é parte de registra entrega"

?>




<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="caixa.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registra Entrega</title>
    
</head>
<body>

<br>
<h1>Registra Entrega</h1>


<div class="container">
  <a href="index.php"><button>Voltar</button></a>
 
  <form action="" method= "POST">
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
      <input type="text" id="servico" name="servico" placeholder="Digite o serviço realizado" required>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="pag">Pagamento</label>
    </div>
    <div class="col-75">
      <select id="pag" name="pagamento">
        <option value="avista">Á Vista</option>
        <option value="Boleto">Boleto</option>
        <option value="Credito">Crédito</option>
       
      </select>
    </div>
    
  </div>
   

  <div class="row">
    <div class="col-25">
      <label for="lname">Celular</label>
    </div>
    <div class="col-75">
      <input type="text" id="lname" name="celular" placeholder="(xx)xxxxxxxxx">
    </div>
    
  </div>
  <br>
  <br>
  <div class="row">
    <input type="submit" value="Registra Entrega" name="update"/>
  </div>
  </form>
</div>

</body>
</html>