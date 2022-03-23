<?php
include 'db.php';
//include "consulta.php";
// session_start();

// if(@$_POST['nome']&&
//   //@_POST['email']&&
//   @$_POST['cpf']&&
//   @$_POST['telefone']&&
//   @$_POST['data de entrega']&&
//   @$_POST['modelo']&&
//   @$_POST['serviços']){
  //@_POST['senha']){
try{
  $nome= '';
  $cpf= '';
  $telefone= '';
  $datadeentrega= '';
  $modelo= '';
  $serciços='';

  /*
  ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
  if(@$_POST['nome']){

      //var_dump($db);exit;
      $comando= $db->prepare("INSERT INTO usuarios(nome,cpf,telefone,datadeentrega,modelo,servicos) VALUES (:nome,:cpf,:telefone,:datadeentrega,:modelo,:servicos)");
      
      $comando->bindParam('nome', $_POST['nome'], PDO::PARAM_STR);
      $comando->bindParam('cpf', $_POST['cpf'], PDO::PARAM_STR);
      $comando->bindParam('telefone', $_POST['telefone'], PDO::PARAM_STR);
      $comando->bindParam('datadeentrega', $_POST['data_de_entrega']);
      $comando->bindParam('modelo', $_POST['modelo'], PDO::PARAM_STR);
      $comando->bindParam('servicos', $_POST['serviços'], PDO::PARAM_STR);
      $comando->execute();
    }


} catch (PDOException $e) {
    echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
    exit();
}
// session_start();

// if(@$_POST['nome']&&
//   //@_POST['email']&&
//   @$_POST['cpf']==''&&
//   @$_POST['telefone']==''&&
//   @$_POST['data de entrega']==''&&
//   @$_POST['modelo']==''&&
//   @$_POST['serviços']==''){
//   //@_POST['senha']){
//       $_SESSION['autenticados']=1;
//       header('Location: index.php');
//       exit();

//   }
  //include 'barra_de_navigação.php';

  //var_dump($_POST);
  //exit();
?>
 <form className="form" action="cadcliente.php" method="post" >
<table width="80%" border="0" cellspacing="0" cellpadding="0" align="center">
        
    <div align="center">
    <h1>Cadastra Cliente</h1>

    <tr>
     <td width="24%" height="25"><font face="Arial" size="2">Nome:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <input type="text" name="nome" size="20"></font></td>
    </tr>

    
    <tr>
     <td height="25" width="24%"><font face="Arial" size="2">CPF:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <input type="text" name="cpf" size="20"></font></td>
    </tr>


    <tr>
     <td height="25" width="24%"><font face="Arial" size="2">Telefone:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <input type="text" name="telefone" size="20"></font></td>
    </tr>

    <tr>
     <td height="25" width="24%"><font face="Arial" size="2">Date de entrega:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <input type="date" name="data de entrega"
        placeholder="dd-mm-yyyy" value=""
        min="1997-01-01" max="2030-12-31">
      
     
    </tr>

    <tr>
     <td height="25" width="24%"><font face="Arial" size="2">Modelo:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <input type="text" name="modelo" size="20"></font></td>
    </tr>

    <tr>
     <td height="25" width="24%"><font face="Arial" size="2">Serviços:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <input type="text" name="serviços" size="20"></font></td>
    </tr>


    <tr>
     <td height="30" colspan="2">
     <text-align="center">
     <input type="submit"name="cadastrar" value="Cadastrar cliente &gt;&gt;"/>
     
    </tr>
   </table> 
   </form>
  
 
