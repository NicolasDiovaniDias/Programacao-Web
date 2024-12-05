<link rel="stylesheet" href="styles/produto.css">
<?php
    include_once "_includes/_head.html";
?>
<body>
    <?php
        include_once "_includes/_header.php";
    ?>
    <main>
        <?php
        include_once "_includes/_conexao.php";
        $id = $_GET['id'];
        $comando = "SELECT * FROM produtos WHERE id_produtos = ?";

        $preparo = mysqli_prepare($conexao, $comando);

        mysqli_stmt_bind_param($preparo, "i", $id);

        mysqli_stmt_execute($preparo);

        $resultado = mysqli_stmt_get_result($preparo);

        $produtos = mysqli_fetch_assoc($resultado);
        ?>
        <article>
            <h1><?php echo $produtos['descricao'];?></h1>
            <hr>
            <img src="<?php echo $produtos['foto_caminho'];?>" alt="">
            <p id="preco_total">R$<?php echo $produtos['preco_total'];?> total</p>
            <p id="preco_aluguel">R$<?php echo $produtos['preco_aluguel'];?> aluguel</p>
            <p id="metros"><?php echo $produtos['metros'];?>²m</p>
            <p id="quartos"><?php echo $produtos['quartos'];?> quartos</p> 
            <p id="endereco"><?php echo $produtos['endereco'];?></p>
            <button>
            </button>
        </article>
    </main>
    <?php
    include_once "_includes/_footer.html";
    ?>
</body>
</html>