<?php
     
include 'db.php';

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

try {

    $cpf = '' ;
    $dataderetira = '';
    $modelo = '';
    $servicos = '';
    
    if(@$_POST['cpf']){
        $cpf= $_POST['cpf'];
        $dataderetira = $_POST['dataderetira'];
        $modelo = $_POST['modelo'];       
        $servicos = $_POST['servicos'];
    $comando = $db->prepare('SELECT cpf FROM ordem WHERE cpf = :cpf');
    $comando->bindParam(':cpf', $cpf);
    $comando->execute();
    $data=$comando->fetch();
    if(!$data){
        echo ' cpf não existe';
    }

    $comando = $db->prepare('UPDATE ordem SET dataderetira = :dataderetira, modelo = :modelo,servicos = :servicos WHERE cpf = :cpf');
    $comando->bindParam(':cpf', $cpf);
    $comando->bindParam(':dataderetira', $dataderetira);
    $comando->bindParam(':modelo', $modelo);
    $comando->bindParam(':servicos', $servicos);

    $comando->execute();


    }
}catch (PDOException $e) {
    echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
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
    <title>Atualizar</title>
    
</head>
<body>

<br>



<div class="container">
  <a href="index.php"><button>Voltar</button></a>
  <h1>Atualizar Lista</h1>
  <h2>Informa os dados do cliente deseja alterar</h2>

 
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
      <label for="telefone">Data de retira</label>
    </div>
    <div class="col-75">
      <input type="date" id="dataderetira" name="dataderetira" placeholder="dd-mm-yyyy"required>
    </div>
     </div>

     <div class="row">
    <div class="col-25">
      <label for="modelo">Modelo</label>
    </div>
    <div class="col-75">
      <input type="text" id="modelo" name="modelo" placeholder="Digite o modelo"required>
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
  <div class="row">
    <input type="submit" value="Atualizar" name="update"/>
  </div>
  </form>
</div>

</body>
</html>



