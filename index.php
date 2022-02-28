<?php
    session_start();
    if (!isset($_SESSION['autenticados'])){

        header('location: cadcliente.php');
        exit();
    }

    echo' aqui nos vamos implementar a pagina principal';

?>
<!DOCTYPE html>
<html lang="pt-br">

<link rel="stylesheet" href="">

<link rel="stylesheet" href="">


 
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= device-width">
    <title>Mega Assistencia Técnica</title>
    

    </head>

<body>
    <header>
        <h1 class="titulopricinpal">Mega Assistencia Técnica</h1>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

            <div class="caixa">
                <h1><img src="cream.jpeg"></h1>
                <nav>
                    <ul>
                        <li><a href="Index.html">Cadastrar Cliente</a></li>
                        <li><a href="produtos.html">Cadastrar Funcionario</a></li>
                        <li><a href="contato.html">Registra entrega</a></li>
                    </ul>
                </nav>
            </div>
        </header>

    <img class="banner" src="image.jpeg">
    <main>
        <section class="principal">
            <h2 class="titulo-principal">Sobre Mega Assistencia Técnico</h2>
            <img class="utensilios" src="ice1.jpeg" alt="utensilios soverteria">

            <p>Localizada no centro da cidade<strong> Mega Assistencia </strong> traz para o mercado
                oa melhor solução para o seu celular. Fundada em 2021, a Mega Assistencia já é destaque na cidade
                e conquista novos clientes cada dias.</p>

            <p id="missao" ><em>Nossa missão é :<strong> "proporcionar a qualidade
                do serviço aos clientes".</strong>.</em></p>

            <p>Oferecemos as mudanças no mundo em relação a solucionar seu problema, o atendimento possui padrão de
                excelencia e agilidade, garantindo qualidade & satisfação dos nossos clientes.
            </p>
        </section>

        <section class="mapa">
            <h3 class="titulo-principal">Nosso estabelecimento</h3>
            <p>Nosso estabelecimento está Localizada no centro da cidade</p>
           <div class="mapa-conteudo">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3551.
                9124323096557!2d-52.67548288538661!3d-27.09605688304901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
                1!3m3!1m2!1s0x94e4b51c80ec841d%3A0xfae8b0bef1962423!2sR.%20Dion%C3%ADsio%20Cerqueira%2C%2050%20-%20Efapi%2C%20Chapec%C3%B3%20-%20SC%2C%2089809-530!5e0!3m2!1spt-BR!2sbr!4v1638735679725!5m2!1spt-BR!2sbr" width="100%" height="300" 
                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
           </div>

        </section>

        <section class="beneficios">
            <h3 class="titulo-principal">Beneficios</h3>
           <div class="conteudo-beneficios">
                <ul class="lista-beneficios">
                    <li class="itens">Atendimento aos clientes</li>
                    <li class="itens">Localizada no coração da cidade</li>
                    <li class="itens">Espaço diferenciado de Atendimento</li>
                    <li class="itens">Profissionais qualificados</li>
                </ul>
                <img src="beneficios.jpeg" class="image-beneficios">
           </div>
            <div class="video">
                
           </div>
        </section>

    </main>

    <footer>
        <img src="">
        <p>&copy; Copyright Mega Assistencia Técnica-2022</p>
        <p>All rights reserved.</p>
    </footer>
</body>
</html>