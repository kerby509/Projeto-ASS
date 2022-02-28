<?php
    //echo 'oi' ;
    //exit();
    session_start();
    if (!isset($_SESSION['autenticados'])){

        header('location: cadcliente.php');
        exit();
    }

?>
     <a href= "logout.php">sair</a>