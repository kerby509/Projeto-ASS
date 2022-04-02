<?php

include 'db.php';
//include "consulta.php";
try{
  $cpf= '';
  $dataderetira= '';
  $modelo= '';
  $sercicos='';
  $valor='';
  $pagamento='';

  
 ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

  if(@$_POST['cpf']){
    if($_POST['pagamento']=='S'){
      $pagamento=1;
    
    }else{
      $pagamento=0;
    }


      //var_dump($db);exit;
      $comando= $db->prepare("INSERT INTO ordem(cpf,dataderetira,modelo,servicos,valor,pagamento) VALUES (:cpf,:dataderetira,:modelo,:servicos,:valor,:pagamento)");
      
    
      $comando->bindParam('cpf', $_POST['cpf'], PDO::PARAM_STR);
      $comando->bindParam('dataderetira', $_POST['data_de_retira']);
      $comando->bindParam('modelo', $_POST['modelo'], PDO::PARAM_STR);
      $comando->bindParam('servicos', $_POST['servicos'], PDO::PARAM_STR);
      $comando->bindParam('valor', $_POST['valor'], PDO::PARAM_STR);
      $comando->bindParam('pagamento', $pagamento, PDO::PARAM_STR);

      $comando->execute();
    }


} catch (PDOException $e) {
    echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
    exit();
}
 session_start();

 if( @$_POST['cpf']==''&&
   @$_POST['data de retira']==''&&
   @$_POST['modelo']==''&&
   @$_POST['servicos']==''){
//   //@_POST['senha']){
       //$_SESSION['autenticados']=1;
       //header('Location: index.php');
       //exit();

   }

?>
   
<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="caixa.css">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ordem Servicos</title>
    
</head>
<body>


<div class="container">
  <a href="index.php"><button>Voltar</button></a>
  <h1>Ordem Servicos</h1>

 
  <form action="ordemservico.php" method= "POST">
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
      <input type="date" id="data de retira" name="data de retira" placeholder="dd-mm-yyyy"required>
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

  <div class="row">
    <div class="col-25">
      <label for="servico">Valor</label>
    </div>
    <div class="col-75">
      <input type="text" id="valor" name="valor" placeholder="Digite o valor" required>
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="servico">Pagamento</label>
    </div>



<label for="radio-sim"><input type="radio" name="pagamento" value="S" id="pagamento">
   Sim</label>

      
      <input type="radio" id="pagamento" name="pagamento" value="N" placeholder="" checked >
      <label for="sim">Não</label>

    </div>
  </div> 
 
  </br>
  </br>
  </br>
  </br>
  <div class="ordem">
    <input type="submit" value="Ordem servico" name="update"/>
  </div>
  

  </form>
</div>

</body>
</html>




 