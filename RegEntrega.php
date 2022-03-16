<?php


echo"Aqui é parte de registra entrega"

?>

<!DOCTYPE html>
<html lang="pt-br">

<link rel="stylesheet" href="styles.css">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= device-width">
    <title>Registra Cliente</title>
    

    </head>
<body>
    <header>
        <h1>Registra Cliente<h1>
    </header>

    
        <form className="form" action="RegEntrega.php" method="post">
            <fieldset>
                <div>
                    <label>CPF</label>
                    <input type="text" name="cpf">
                </div>
                <div>
                    <label>Nome</label>
                    <input type="text" name="nome" id="nome">
                </div>
                <div>
                    <label>Serviços</label>
                    <input type="text" name="servicos">
                </div>
                <div>
                <label>F.Pagamento</label>
                <input type="text" name="f.pagamento">

                </div>
            </fieldset>

        </form>

    

</body>