<?php
require "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>informe seu email e senha</h1>
    <?php
        logar($connect);
    ?>
    <form method="post">
        <input type="email" name="email" placeholder = "seu email" required>
        <input type="password" name="senha" placeholder= "sua senha" required>
        <input type="submit" value="logar" name="logar">

    </form>
</body>
</html>