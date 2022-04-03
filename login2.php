
    
<?php
session_start();
 
include'css/styles.css';
include'db.php';


session_start();
if(@$_POST['email']=='megas' &&
    @$_POST['senha']=='0000'){
        $_SESSION['autenticados']=1;
        header('Location: index2.php');
        exit();
    }




?>

<!DOCTYPE html>
<html>
</div>


    <link rel="stylesheet" href="styles.css">


    <div class="login" >

        <form 
          action="login2.php" method="post" >
          <div class="caixa">
                <h1 >Bem vindo ao Sistema</h1>
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
