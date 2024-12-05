<link rel="stylesheet" href="styles/produtos.css">
<?php
    include_once "_includes/_head.html";
?>
<body>
    <?php
        include_once "_includes/_header.php";
    ?>
    <main>
        <article>
            <div id="produtos">
                <h1>LOGIN</h1>
                <form method="POST" action="_includes/_backprodutos.php" enctype="multipart/form-data">
                    <input type="text" name="descricao" placeholder = "Descrição: " required>
                    <input type="number" name="preco_total" placeholder= "Preco Total:" required>
                    <input type="number" name="preco_aluguel" placeholder= "Preco Aluguel:" required>
                    <input type="number" name="metros" placeholder= "Metros:" required>
                    <input type="number" name="quartos" placeholder= "Quartos:" required>
                    <input type="text" name="endereco" placeholder= "Endereço:" required>
                    <p><label for=""> selecione o arquivo</label>
                    <input type="file" name="foto" required>
                    <input type="submit" value="Upload" name="enviar">
                </form>
            </div>
        </article>
    </main>
    <?php
    include_once "_includes/_footer.html";
    ?>
</body>
</html>