<?php
session_start();
 
include'css/styles.css';

include'db.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//pukisa c nn login nn ou fè saaa
$comando=$db->prepare("SELECT * FROM funcionario WHERE email=:email and senha=:senha");
$comando->bindParam('email', $_POST['email'], PDO::PARAM_STR);
$comando->bindParam('senha', $_POST['senha'], PDO::PARAM_STR);
$comando->execute();
$data = $comando->fetch();

//session_start();
if($data){
        $_SESSION['autenticados']=1;
        header('Location: index.php');
        exit();
    }


//include 'barra_de_navigação.php';

?>

<html>
<link rel="stylesheet" href="styles.css">


    <div class="login" >

        <form 
          action="login.php" method="post" >
          <div class="caixa">
                <h1 >Acessar ao Sistema</h1>
                <p>Digite seu E-mail</p>
                <input type="text" name="email">
                <p>Digite sua senha</p>
                <input type="password" name="senha" > 
            </div>
    

            <div style="text-align: center;
                margin-top: 0.5rem;">
                    <button type="submit">Entrar</button>     

             </div>

             <div style="text-align: center;
                margin-top: 0.5rem;">                    
             </div>
       
        

        </form>
 </div>
</html>
