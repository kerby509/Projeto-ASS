<?php
    session_start();
    if (!isset($_SESSION['autenticados'])){

        header('location: cadcliente.php');
        exit();
    }

    echo' aqui nos vamos implementar a pagina principal';

?>
     <a href= "login.php">Sair</a> <br>