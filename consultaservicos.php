<?php
//include'css/styles.css';
include'db.php';


// sa c pou lew fin fe cadastra a pou cliente resgistre nan sistem nan
 //$comando=$db->prepare("SELECT * FROM usuarios WHERE cpf=:cpf ");
 //$comando=$db->prepare("SELECT * FROM  ordem s where :cpf = s.cpf ");
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

<html>
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
<html>