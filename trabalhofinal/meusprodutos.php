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
        $query = "SELECT id_produtos ,descricao, preco_total, preco_aluguel, metros, quartos, endereco, foto_caminho, fk_cliente FROM produtos WHERE fk_cliente = ?";

        $stmt = mysqli_prepare($conexao, $query);

        mysqli_stmt_bind_param($stmt, "i", $_SESSION["id_logado"]);
        
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
            <a href="meusprodutos.php"><img src="imagens/recarregar.png" ></a>
        </article>
        <article id="artc_produtos">
            <?php
            for($i =0; $i<$qnt;$i++){
                if(isset($_SESSION['id_logado']) && $_SESSION['id_logado']!=''){
                    ?>
                        <a href="produto.php?id=<?php echo $lista[$i]['id_produtos'];?>">
                    <?php
                }
                else{
                    ?>
                        <a href="login.php">
                    <?php
                }
                ?>
                <div class="produtos">
                <img src="<?php echo $lista[$i]['foto_caminho'];?>" alt="">
                <div>
                    <p class="descricao"><?php
                    echo $lista[$i]['descricao'];
                    ?></p>    
                    <h1>R$<?php
                    echo $lista[$i]['preco_total'];
                    // echo $_SESSION['id_logado'];
                    ?> <strong>total</strong></h1>
                    <h3>R$<?php
                    echo $lista[$i]['preco_aluguel'];
                    ?> <strong>aluguel</strong></h3>
                    <p class="minus"><?php
                    echo $lista[$i]['metros'];
                    ?>²m</p>
                    <p class="minus"><?php
                    echo $lista[$i]['quartos'];
                    ?> quartos</p>
                    </div>
                </div>
                </a>
            <?php
            }
            ?>
        </article>
    </main>
    <?php
    include_once "_includes/_footer.html";
    ?>
</body>
</html>