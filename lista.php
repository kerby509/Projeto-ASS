<?php
include 'db.php';

$comando = $db->prepare('SELECT * FROM usuarios ');
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
<body>


<h2>Table dos clientes </h2>
<!-- <form action="lista.php" method= "POST"> -->

<table style="width:100%">
  <tr>
    <td>Nome</td>
    <td>Cpf</td>
    <td>Email</td>
    <td>Telefone</td>
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
            <td><?=$linha[$i]['telefone']?></td>
            <td><a href="Delete">Apagar</a></td>
            
      </tr>
  <?php }
      }
    ?>
</table>

<!-- <p>To undestand the example better, we have added borders to the table.</p> -->

</body>
</html>

