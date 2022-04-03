<!DOCTYPE html>
<html>
    
<!-- <div style="width:150px; margin:auto; heigh:500px;margin-top:300px:background-color: blue;
"> -->
<?php
session_start();
 
include'css/styles.css';

include'db.php';

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$comando=$db->prepare("SELECT * FROM funcionario WHERE email=:email and senha=:senha");
$comando->bindParam('email', $_POST['email'], PDO::PARAM_STR);
$comando->bindParam('senha', $_POST['senha'], PDO::PARAM_STR);
$comando->execute();
$data = $comando->fetch();

session_start();
if($data){

    // if(@$_POST['usuario']==''&&
    // @$_POST['senha']=='')
<<<<<<< HEAD
     //{

    //if(@$_POST['usuario']==''&&
    //@$_POST['senha']==''){

=======
     

    //if(@$_POST['usuario']==''&&
    //@$_POST['senha']==''){
>>>>>>> f9e52bcc3c34c5fbf095a700775e75205843066f
        $_SESSION['autenticados']=1;


        echo '<meta http-equiv="refresh" content="2;url=index.php">';
        echo '<progress max=100><strong>Progress:60%
                done.</strong></progress><br>';
        echo '<span class= "itext"> please wait.......... !...</span>';

        // header('Location: index.php');
        //exit();
   // 
     //}
}



?>

    <div>


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
                    margin-top: 0.5rem; "> 
                    <form>
                        <a href="login2.php">
                            <input type="button" value="Eu sou Administrador">

                        </a>
                                 
                     </form>
                </div>
            </form>
       
        

        </form>
    </div>
 </html>