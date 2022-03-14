<?php
include 'db.php';
session_start();

if(@$_POST['nome']&&
  @_POST['email']&&
  @$_POST['cpf']&&
  @$_POST['telefone']&&
  @$_POST['data de entrega']&&
  @$_POST['modelo']&&
  @$_POST['serviços']&&
  @_POST['senha']){
    $sql=$db->prepare("INSERT INTO usuarios(nome,email,cpf,telefone,datadeentrega,modelo,serviços,senha) VALUES (:nome,:email,:cpf,:telefone,:data de entrega,:modelo,serviços,senha)");
    $sql->bindParam('nome', $_POST['nome'], PDO::PARAM_STR);
    $sql->bindParam('email', $_POST['email'], PDO::PARAM_STR);
    $sql->bindParam('cpf', $_POST['cpf'], PDO::PARAM_STR);
    $sql->bindParam('telefone', $_POST['telefone'], PDO::PARAM_STR);
    $sql->bindParam('data de entrega', $_POST['data de entrega']);
    $sql->bindParam('modelo', $_POST['modelo'], PDO::PARAM_STR);
    $sql->bindParam('serviços', $_POST['serviços'], PDO::PARAM_STR);
    $sql->bindParam('senha', $_POST['senha'], PDO::PARAM_STR);
    $sql->execute();

      $_SESSION['autenticados']=1;
      header('Location: index.php');
      exit();

  }
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
     <input type="text" name="nome" size="35"></font></td>
    </tr>

    <tr>
     <td width="24%" height="25"><font face="Arial" size="2">Email:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <input type="text" name="email" size="35"></font></td>
    </tr>

    <tr>
     <td height="25" width="24%"><font face="Arial" size="2">CPF:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <input type="text" name="cpf" size="30"></font></td>
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
     <input type="text" name="modelo" size="35"></font></td>
    </tr>

    <tr>
     <td height="25" width="24%"><font face="Arial" size="2">Serviços:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <input type="text" name="serviços" size="35"></font></td>
    </tr>

    <tr>
     <td width="24%" height="25"><font face="Arial" size="2">Cria a Senha:</font></td>
     <td height="25" width="76%"><font face="Arial" size="2">
     <input type="text" name="senha" size="35"></font></td>
    </tr>

    <tr>
     <td height="20" colspan="2">
     <div align="center">
     <input type="submit" name="cadastrar" value="Cadastrar cliente &gt;&gt;"></div></td>
    </tr>
   </table> 
   </form>
  
 
