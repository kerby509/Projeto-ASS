<?php
include 'db.php';

$comando = $db->prepare('SELECT * FROM usuarios ');
$comando->execute();

if($linha = $comando->fetchAll()){
  for ($i=0;$i<count($linha);$i++){
  //  var_dump($linha);
//echo($linha[$i]['cpf']);
   echo'<p>'. $linha[$i]['nome']. ','. $linha[$i]['cpf'] . ','. $linha[$i]['telefone'] .','. $linha[$i]['datadeentrega'] .','. $linha[$i]['modelo'] .','. $linha['servicos'] .'</p>';

  }

}


?>