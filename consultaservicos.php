<?php
//include'css/styles.css';
include'db.php';
 $comando=$db->prepare("SELECT s.*, u.nome FROM usuarios u join  ordem s on u.cpf=s.cpf where :cpf = s.cpf ");
//  $comando->bindParam(':cpf', $cpf, );
$comando->bindParam('cpf', $_POST['cpf'], PDO::PARAM_STR);
 
 $comando->execute();
 //$data = $comando->fetch();

 while($data = $comando->fetch()){
    //  echo'<p>'. $linha['nome']. ','. $linha['cpf'] . ','. $linha['telefone'] .','. $linha['datadeentrega'] .','. $linha['modelo'] .','. $linha['servicos'] .'</p>';
     
     echo'<p>'. $data['nome'].'</p>';
     echo'<p>'. $data['dataderetira'].'</p>';
     echo'<p>'. $data['modelo'].'</p>';
     echo'<p>'. $data['servicos'].'</p>';
     
 }
session_start();
    if($data){
        if(@$_POST['cpf']==''){
            // $_SESSION['autenticados']=1;
            // header('Location: index.php');
            exit();
        }
    }
// //include 'barra_de_navigação.php';
 ?>

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
   
    <form style="background-color:;" action="consultaservicos.php" method="post">
        <input type="text" name="cpf">
        <input type="submit" value="consultaservicos"><br>
    </form>

</body>
<html>

<!-- <html>
    <form action="consultaservicos.php" method="post">
        <p>Consulta lista de Servicos</p>
        <input type="text" name="cpf" id='cpf'>
        <input type="submit" value="consultaservicos" id='sub'><br>
    </form>
    <!-- <script>
        let input = document.getElementById('cpf')
        let sub = document.getElementById('sub')
        sub.addEventListener('click', () => {
            input.value = ""
        })
    </script> -->
<html> -->