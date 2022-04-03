<?php
include 'db.php';

$comando = $db->prepare('SELECT * FROM funcionario ');
$comando->execute();

?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body style= "background:#7fffd4";>


<h2>Lista dos Funcionario </h2>
<a href="index2.php"><button>Voltar</button></a>

<!-- <form action="listafunc.php" method= "POST"> -->

<table style="width:100%">
  <tr>
    <td>Nome</td>
    <td>Cpf</td>
    <td>Email</td>
    <td>Endereco</td>
    <td>Telefone</td>
    <td>Senha</td>
    <td>Action</td>
  </tr>
  <?php 
      if($linha = $comando->fetchAll()){
        for ($i=0;$i<count($linha);$i++){
    ?>

   
      <tr>
  
            <td><?=$linha[$i]['nome']?></td>
            <td><?=$linha[$i]['cpf']?></td>
            <td><?=$linha[$i]['email']?></td>
            <td><?=$linha[$i]['endereco']?></td>
            <td><?=$linha[$i]['telefone']?></td>
            <td><?=$linha[$i]['senha']?></td>
            <!-- <td><a href="Delete">Apagar</a></td> -->
            
            <td>
                <form action="Delete.php" method= "POST">
                
                <input type="hidden" name = "cpf" value="<?=$linha[$i]['cpf']?>">
                <input type="submit" value="Delete">
                </form>

            

        </td>
            

            
      </tr>

  <?php }
      }
    ?>
</table>

<!-- <p>To undestand the example better, we have added borders to the table.</p> -->

</body>
</html>

