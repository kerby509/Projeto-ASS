<?php
     
include 'db.php';

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

try {

    $cpf = '' ;
    $nome= '';
    // $datadeentrada = '';
    $modelo = '';
    $servicos = '';
    $dataderetira= '';
    $valor='';
    $pagamento ='';
    
    if(@$_POST['cpf']){

      if($_POST['pagamento']=='S'){
        $pagamento=1;
      
      }else{
        $pagamento=0;
      }
  
      $cpf= $_POST['cpf'];
      $nome = $_POST['nome'];
      //$datadeentrada = $_POST['datadeentrada'];
      $modelo = $_POST['modelo'];       
      $servicos = $_POST['servicos'];
      $dataderetira = $_POST['dataderetira'];
      $valor = $_POST['valor'];
      $modelo = $_POST['pagamento']; 
  $comando = $db->prepare('SELECT cpf FROM ordem WHERE cpf = :cpf');
  $comando->bindParam(':cpf', $cpf);
  $comando->execute();
  $data=$comando->fetch();
  if(!$data){
      echo ' cpf não existe';
  }else{
    echo 'dados Atualizar com sucesso';
  }

    $comando = $db->prepare('UPDATE ordem SET nome = :nome, modelo = :modelo,servicos = :servicos, dataderetira = :dataderetira, valor = :valor, pagamento= :pagamento WHERE cpf = :cpf');
    $comando->bindParam(':cpf', $cpf);
    $comando->bindParam(':nome', $nome);
    //$comando->bindParam(':datadeentrada', $datadeentrada);
    $comando->bindParam(':modelo', $modelo);
    $comando->bindParam(':servicos', $servicos);
    $comando->bindParam(':dataderetira', $dataderetira);
    $comando->bindParam(':valor', $valor);
    $comando->bindParam(':pagamento', $pagamento);


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
  <h2>Informa o CPF do cliente deseja alterar</h2>

 
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

      <!-- <input type="date" id="dataderetira" name="dataderetira" placeholder="dd-mm-yyyy"required> -->

      <input type="text" id="nome" name="nome" placeholder="Digite nome do cliente"required>

    </div>

  </div>

  <!-- <div class="row">
    <div class="col-25">
      <label for="datadeentrada">Data de entrada</label>
    </div>
    <div class="col-75">
      <input type="date" id="datadeentrada" name="datadeentrada" placeholder="dd-mm-yyyy"required>
    </div>
    
  </div> -->
    
  <div class="row">

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
      <label for="dataderetira">Data de retira</label>
    </div>
    <div class="col-75">
      <input type="date" id="dataderetira" name="dataderetira" placeholder="dd-mm-yyyy"required>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="valor">Valor</label>
    </div>
    <div class="col-75">
      <input type="text" id="valor" name="valor" placeholder=" Digite Valor "required>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="servico">Pagamento</label>
    </div>


<div class="col-75">
<label for="radio-sim"><input type="radio" name="pagamento" value="S" id="pagamento">
   Sim</label>
      
      <input type="radio" id="pagamento" name="pagamento" value="N" placeholder="" checked >
      <label for="sim">Não</label>
  </div>

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



