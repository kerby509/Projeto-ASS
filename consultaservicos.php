<?php
include 'db.php';

$comando = $db->prepare('SELECT * FROM ordem ');
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


<h2>Lista dos Servicos  </h2>
<!-- <a href="index2.php"><button>Voltar</button></a> -->

<!-- <form action="lista.php" method= "POST"> -->

<table style="width:100%">
  <tr>
    <td>Cpf</td>
    <td>Nome</td>
    <td>Modelo</td>
    <td>Servicos</td>
    <td>Data de retira</td>
    <td>Valor</td>
    <td>Pagamemto</td>
   
  </tr>
  <?php 
      if($linha = $comando->fetchAll()){
        for ($i=0;$i<count($linha);$i++){
    ?>
      <tr>
            <td><?=$linha[$i]['nome']?></td>
            <td><?=$linha[$i]['cpf']?></td>
            <td><?=$linha[$i]['modelo']?></td>
            <td><?=$linha[$i]['servicos']?></td>
            <td><?=$linha[$i]['dataderetira']?></td>
            <td><?=$linha[$i]['valor']?></td>
            <td><?=$linha[$i]['pagamento']?></td>
            
            
            
      </tr>
  <?php }
      }
    ?>
</table>

<!-- <p>To undestand the example better, we have added borders to the table.</p> -->

</body>
</html>

