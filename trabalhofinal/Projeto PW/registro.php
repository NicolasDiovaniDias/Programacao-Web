<link rel="stylesheet" href="styles/registro.css">
<?php
    include_once "_includes/_head.html";
?>
<body>
    <?php
        include_once "_includes/_header.html";
    ?>
    <body>
        <main>
        <article>
            <div id="registro">
                <h1>SING UP</h1>
                <form method="post" action="_includes/_backregistro.php">
                    <input type="text" name="nome" placeholder = "Nome" required>
                    <input type="email" name="email" placeholder = "Email" required>
                    <input type="text" name="telefone" placeholder = "telefone" required>
                    <input type="password" name="senha" placeholder= "Senha:" required>
                    <input type="password" name="senha_2" placeholder= "Confirme a Senha: " required>
                    <input type="submit" value="registrar-se" name="registrar">
                </form>
            </div>
        </article>
        </main>
    </body>
</body>
</html>