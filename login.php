<?php
 
include'css/styles.css';

session_start();
if(@$_POST['usuario']=='megas' &&
    @$_POST['senha']=='1234'){
        $_SESSION['autenticados']=1;
        header('Location: index.php');
        exit();
    }


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
