<?php
     
include 'db.php';

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

try {

    $cpf = '' ;
    $dataderetira = '';
    $modelo = '';
    $servicos = '';
    
    if(@$_POST['cpf']){
        $cpf= $_POST['cpf'];
        $dataderetira = $_POST['dataderetira'];
        $modelo = $_POST['modelo'];       
        $servicos = $_POST['servicos'];
    $comando = $db->prepare('SELECT cpf FROM ordem WHERE cpf = :cpf');
    $comando->bindParam(':cpf', $cpf);
    $comando->execute();
    $data=$comando->fetch();
    if(!$data){
        echo ' cpf não existe';
    }

    $comando = $db->prepare('UPDATE ordem SET dataderetira = :dataderetira, modelo = :modelo,servicos = :servicos WHERE cpf = :cpf');
    $comando->bindParam(':cpf', $cpf);
    $comando->bindParam(':dataderetira', $dataderetira);
    $comando->bindParam(':modelo', $modelo);
    $comando->bindParam(':servicos', $servicos);

    $comando->execute();


    }
}catch (PDOException $e) {
    echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
    exit();
}

?>

<html>

    <form action="update.php" method="post">
        <p>Atualizar lista de Servicos</p>
        <p> Digita um cpf valida para consiguir Atualizar</p>
        <input type="text" name="cpf">
        <p> Data de retira</p>
        <input type="date" name="dataderetira">
        <p> Modelo</p>
        <input type="text" name="modelo">
        <p> Servicos</p>

        <input type="text" name="servicos">
        <input type="submit" value="update" id='sub'><br>
    </form>
    <!-- <script>
        let input = document.getElementById('cpf')
        let sub = document.getElementById('sub')
        sub.addEventListener('click', () => {
            input.value = ""
        })
    </script> -->
<html>