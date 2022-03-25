<?php




?>


<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="caixa.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atualizar Lista</title>
    
</head>
<body>

<br>


<div class="container">
  <a href="index.php"><button>Voltar</button></a>
  <h1>Atualizar Lista</h1>
  <h2>Informa o Cpf e o nome do cliente deseja alterar</h2>

 
  <form action="cadcliente.php" method= "POST">
  <div class="row">
    <div class="col-25">
      <label for="cpf">CPF</label>
    </div>
    <div class="col-75">
      <input type="text" id="cpf" name="cpf" placeholder=" Digite cpf cliente "required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="nome">Nome</label>
    </div>
    <div class="col-75">
      <input type="text" id="nome" name="nome" placeholder="Digite nome do cliente"required>
    </div>
  </div>
  <br>
  <div class="row">
    <input type="submit" value="Realizar Atualização" name="update"/>
  </div>
</form>
</body>
</html>