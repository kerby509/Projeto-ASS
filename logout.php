<!DOCTYPE html>
<html>
    <body>
        <div style="width:150px; margin:auto; heigh:500px;margin-top:300px;">
<?php

session_start();
if(!isset($_SESSION['desautentica'])){
    echo '<meta http-equiv="refresh" content="2;url=login.php">';
    echo '<progress max=100><strong>Progress:60%
            done.</strong></progress><br>';
    echo '<span class= "itext"> Logout please wait !...</span>';

    
    echo 'Sair com sucesso!!!';
   // header('Location: login.php');

    exit();
}
unset($_SESSION['desautentica']);

session_destroy();
echo '<meta http-equiv="refresh" content="2;url=login.php">';
    echo '<progress max=100><strong>Progress:60%
            done.</strong></progress><br>';
    echo '<span class= "itext"> Logout please wait !...</span>';



?>
        </div>

    </body>
 </html>