<?php
//include'css/styles.css';
include'db.php';


// sa c pou lew fin fe cadastra a pou cliente resgistre nan sistem nan
 $comando=$db->prepare("SELECT * FROM usuarios WHERE cpf=:cpf ");
 //$comando=$db->prepare("SELECT * FROM usuarios u JOIN servicos s ON u.cpf = s.cpf ");
//  $comando->bindParam(':cpf', $cpf, );
$comando->bindParam('cpf', $_POST['cpf'], PDO::PARAM_STR);
 
 $comando->execute();
 $data = $comando->fetch();

 foreach($data as $linha){
    //echo'<p>'. $linha['nome']. ','. $linha['cpf'] . ','. $linha['telefone'] .','. $linha['datadeentrega'] .','. $linha['modelo'] .','. $linha['servicos'] .'</p>';
     
    /*echo'<p>'. .'</p>';
     echo'<p>'. $linha['telefone'].'</p>';
     echo'<p>'. $linha['datadeentrega'].'</p>';
     echo'<p>'. $linha['modelo'].'</p>';
     echo'<p>'. $linha['servicos'].'</p>';*/
     echo 'Nome: ' . $linha['nome'] . ', cpf: ' . $linha['cpf'] . '<br>';
 }
 //var_dump($data);exit;

session_start();
    if($data){
        if(@$_POST['cpf']==''){
            // $_SESSION['autenticados']=1;
            // header('Location: index.php');
            exit();
        }
    }
// //include 'barra_de_navigação.php';


// ?>

<!DOCTYPE html>
<html lang="pt-br">
<!-- <link rel="stylesheet" href="caixa.css"> -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta Lista</title>
    
</head>
<!-- background-image: url(assets/fundo.jpeg) -->
<body style="background-color:#7fffd4 ";
">

    <div class="container">
    <a href="index.php"><button>Voltar</button></a>
</br>
    <h1>Consulta Lista</h1>
   
    <form style="background-color:;" action="consulta.php" method="post">
        <input type="text" name="cpf">
        <input type="submit" value="consulta"><br>
    </form>

</body>
<html>