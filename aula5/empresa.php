<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
    <header class="topo">
        <?php
            include "layout/logo.php";
        ?>
        <div class="menu">
        <?php
            include "layout/menu.php";
        ?>
            
        </div>
    </header>
    <main class="principal">
        <div class="info">
            <h1>empresa</h1>
            <?php 
            require_once "layout/banner.php";
            ?>
            <p>conteudo</p>
            <img src="imagens/python logo.png" alt="">
        </div>
    <aside class="lateral">
        <h2>servicos</h2>
        <ul>
            <li><a href="">serviço um</a></li>
            <li><a href="">serviço dois</a></li>
            <li><a href="">serviço tres</a></li>
            <li><a href="">serviço quatro</a></li>
        </ul>
    </aside>
    </main>
    <footer class="rodape">
        <p>desenvolvido por @seunome - todos os direitos reservados</p>
    </footer>
</body>
</html>