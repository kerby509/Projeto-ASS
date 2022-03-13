<?php
 
include'css/styles.css';
include'db.php';


$sql=$db->prepare("SELECT * FROM usuarios WHERE email=:email and senha=:senha");
$sql->bindParam('email', $_POST['email'], PDO::PARAM_STR);
$sql->execute();

session_start();
if(@$_POST['usuario']=='' &&
    @$_POST['senha']==''){
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
                <input type="text" name="usuario">
                <p>Digite sua senha</p>
                <input type="password" name="senha" > 
            </div>
    

            <div style="text-align: center;
                margin-top: 0.5rem;">
                    <button type="submit">Entrar</button>     

             </div>

             <div style="text-align: center;
                margin-top: 0.5rem;">                    
             <button type="submit">Cadastra Administrador</button>
             </div>
       
        

        </form>
 </div>
</html>
