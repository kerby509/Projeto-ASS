<?php
     
     include 'db.php';
     
     // ini_set('display_errors', 1);
     // ini_set('display_startup_errors', 1);
     // error_reporting(E_ALL);
     
     try {
     
         $cpf = '' ;
         $nome = '';
         $email = '';
         $endereco='';
         $telefone='';
         $senha= '';
         
         if(@$_POST['cpf']){
             $cpf= $_POST['cpf'];
           
         //$comando = $db->prepare('SELECT cpf FROM funcionario WHERE cpf = :cpf');
         $comando = $db->prepare('SELECT cpf FROM usuarios WHERE cpf = :cpf');
         $comando->bindParam(':cpf', $cpf);
         $comando->execute();
         $data=$comando->fetch();
         
         if(!$data){
             echo ' cpf não existe';

         }else{
             echo 'Dados apagar com sucesso';
         }
     
         //$comando = $db->prepare('DELETE FROM funcionario WHERE cpf=:cpf');
         $comando = $db->prepare('DELETE FROM usuarios WHERE cpf=:cpf');
         $comando->bindParam(':cpf', $cpf);
     
         $comando->execute();

         
         
     
     
         }
     }catch (PDOException $e) {
         echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
         exit();
     }
     
     ?>