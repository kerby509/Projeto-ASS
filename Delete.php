
<?php
     
     include 'db.php';
     
     // ini_set('display_errors', 1);
     // ini_set('display_startup_errors', 1);
     // error_reporting(E_ALL);
     
     try {
     
         $cpf = '' ;
         $nome = '';
         $email = '';
         $endereco='';
         $telefone='';
         $senha= '';
         
         if(@$_POST['cpf']){
             $cpf= $_POST['cpf'];
           
         $comando = $db->prepare('SELECT cpf FROM funcionario WHERE cpf = :cpf');
         //$comando = $db->prepare('SELECT cpf FROM usuarios WHERE cpf = :cpf');
         $comando->bindParam(':cpf', $cpf);
         $comando->execute();
         $data=$comando->fetch();
         
         if(!$data){
             echo ' cpf não existe';

         }else{
           echo 'Dados apagar com sucesso';
         }
     
         $comando = $db->prepare('DELETE FROM funcionario WHERE cpf=:cpf');
         //$comando = $db->prepare('DELETE FROM usuarios WHERE cpf=:cpf');
         $comando->bindParam(':cpf', $cpf);
     
         $comando->execute();
     
         }
     }catch (PDOException $e) {
         echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
         exit();
     }
     
     ?>
     


<!-- <!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="caixa.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excluir Cliente</title>
    
</head>
<body>

<br>


<div class="container">
  <a href="index.php"><button>Voltar</button></a>
  <h1>Ecluir Cliente</h1>
  <h2>Informa o Cpf e o nome do cliente deseja excluir</h2>

 
  <form action="Delete.php" method= "POST">
  <div class="row">
    <div class="col-25">
      <label for="cpf">CPF</label>
    </div>
    <div class="col-75">
      <input type="text" id="cpf" name="cpf" placeholder=" Digite cpf cliente "required>
    </div>
  </div>
  <!-- <div class="row">
    <div class="col-25">
      <label for="nome">Nome</label>
    </div>
    <div class="col-75">
      <input type="text" id="nome" name="nome" placeholder="Digite nome do cliente"required>
    </div>
  </div> -->
  <!-- <div class="row">
    <input type="submit" value="Delete Cliente" name="update"/>
  </div>
</form>
</body>
</html> --> 