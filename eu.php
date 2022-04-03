<?php

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Teste01</title>
</head>
<body>
    <link rel="stylesheet" type="text/css" href="main.css" />
    <script src="./main.js"></script>

    <section>
        <form>
            <div>
                <label for="nome">Nome:</label>
                <input id="nome" name="nome" type="text" placeholder="Digite seu nome aqui" autofocus/>
            </div>
            <div>
                <label for="cpf">CPF:</label>
                <input id="cpf" name="cpf" type="number" placeholder="Digite seu CPF" />
            </div>
            <div>
                <label for="rg">RG:</label>
                <input id="rg" name="rg" type="number" placeholder="Digite seu RG" />
            </div>

            <button id="adicionarBotao" onclick="adicionarItem()" type="button">Adicionar</button>
            <button id="editarBotao" onclick="" type="button">Editar</button>
        </form>
    </section>

    <table>
        <thead>
            <tr>
                <th>Selecionar</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>RG</th>
            </tr>
        </thead>
        <tbody id="tabela">

        </tbody>

    </table>

</body>
</html>