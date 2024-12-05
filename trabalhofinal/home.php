<link rel="stylesheet" href="styles/home.css">
<?php
    include_once "_includes/_head.html";
?>
<?php
    include_once "_includes/_homeheader.php";
    include_once "_includes/_conexao.php";
?>
<body>
    <?php
        $query = "SELECT id_produtos ,descricao, preco_total, preco_aluguel, metros, quartos, endereco, foto_caminho FROM produtos";
        $stmt = mysqli_prepare($conexao, $query);
        
        mysqli_stmt_execute($stmt);
        
        $result = mysqli_stmt_get_result($stmt);
        $lista=[];
        while ($row = mysqli_fetch_assoc($result)) {
            $lista[]=$row;
        }
        $qnt=count($lista);
        
    ?>
    <main>
        <article id="barra_produtos">
            <div>
                <h2><?php
                echo $qnt;
                ?> imóveis</h2>
                <p>para alugar em cidade</p>
            </div>
            <a href="home.php"><img src="imagens/recarregar.png" ></a>
        </article>
        <article id="artc_produtos">
            <?php
            include_once "_includes/_backhome.php";
            ?>
        </article>
    </main>
    <?php
    include_once "_includes/_footer.html";
    ?>
</body>
</html>