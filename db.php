<?php

// Esse arquivo contém uma implementação simples de uma "conexão" com um banco de dados Sqlite.
// O arquivo é apenas um exemplo de como conectar com um banco de dados.

// Caminho para o arquivo do banco de dados SQlite. Isso só existe no caso desse banco.
// Se estivéssemos usando um banco de dados MySQL, por exemplo, o caminho seria:
//       $db_path = 'mysql:host=localhost;dbname=nomedobanco';
// Veja mais informações em: https://www.php.net/manual/pt_BR/book.pdo.php
$arquivo = 'database.sqlite';

// Essa será a variável que qualquer página poderá utilizar
// para acessar o banco de dados depois de incluir `db.php`
$db = null;


try {
    // Se o arquivo com os dados do banco não existe, cria um e inicializa
    // as tabelas para uso.
    $deve_inicializar_banco = false;

    if(!file_exists($arquivo)) {
        $deve_inicializar_banco = true;
    }

    // "Conecta" com o banco de dados
    $db = new PDO("sqlite:$arquivo");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($deve_inicializar_banco) {
        // Cria as tabelas no banco de dados para uso futuro
        $db->exec('CREATE TABLE usuarios (
            -- id INTEGER PRIMARY KEY,
            cpf Varchar(11) PRIMARY KEY,
            nome TEXT,
            email TEXT,
            telefone TEXT,
            
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )'); 
       
       $db->exec('CREATE TABLE funcionario(
           cpf Varchar(11) PRIMARY KEY,
           nome TEXT,
           email TEXT,
           endereco TEXT,
           telefone TEXT,
           senha TEXT,
           created_at DATETIME DEFAULT CURRENT_TIMESTAMP
       )');
       

        $db->exec('CREATE TABLE ordem (
            -- id INTEGER PRIMARY KEY,
            cpf Varchar(11) PRIMARY KEY,
            nome TEXT,
            modelo TEXT,
            servicos TEXT,
            dataderetira TEXT,
            valor TEXT,
            pagamento TEXT  ,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )'); 


         $db->exec('CREATE TABLE pag (
            cpf Varchar(11) PRIMARY KEY,
            nome TEXT,
            servicos TEXT,
            pagamento TEXT,
            dataderetira TEXT,
            valor TEXT,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        )'); 




    }
} catch (PDOException $e) {
    echo 'Erro com o banco de dados: ' . $e->getMessage();
    exit();
}

?>