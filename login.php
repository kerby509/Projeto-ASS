<?php
 
include'css/styles.css';
include'db.php';

// sa c pou lew fin fe cadastra a pou cliente resgistre nan sistem nan
//pukisa c nn login nn ou fè saaa
// $sql=$db->prepare("SELECT * FROM usuarios WHERE email=:email and senha=:senha");
// $sql->bindParam('email', $_POST['email'], PDO::PARAM_STR);
// $sql->bindParam('senha', $_POST['senha'], PDO::PARAM_STR);
// $sql->execute();
// $data = $sql->fetch();

session_start();
//if($data){
    if(@$_POST['usuario']=='megas'&&
    @$_POST['senha']=='1234'){
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
             </div>
       
        

        </form>
 </div>
</html>
