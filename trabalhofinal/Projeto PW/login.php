<link rel="stylesheet" href="styles/login.css">
<?php
    include_once "_includes/_head.html";
?>
<body>
    <?php
        include_once "_includes/_header.html";
    ?>
    <section>
        <div id="login">
            <h1>LOGIN</h1>
            <form method="post"action="_includes/_backlogin.php">
                <input type="email" name="email" placeholder = "Email" required>
                <input type="password" name="senha" placeholder= "Senha:" required>
                <input type="submit" value="LOGAR" name="logar">
            </form>
        </div>
    </section>
</body>
</html>