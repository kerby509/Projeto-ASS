<?php
 
include'css/styles.css';

session_start();
if(@$_POST['usuario']=='' &&
    @$_POST['senha']==''){
        $_SESSION['autenticados']=1;
        header('Location: index.php');
        exit();
    }








?>

<html>
    

    <div style= "  display:flex ;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    padding: 0 2rem;
    background-image: url("assets/fundo.jpeg");">

        <form style=" background:red;
        width: 100%;
        max-width: 480px;
         padding: 0.5rem;
         " action="login.php" method="post" >
            <h1 style= "text-align: center;
            ">Acessar ao Sistema</h1>
           <div style= "text-align: center;">
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
