
<?php

session_start();
if(!isset($_SESSION['desautentica'])){
    echo 'Sair com sucesso!!!';
    header('Location: login.php');

    exit();
}
unset($_SESSION['desautentica']);

session_destroy();



?>