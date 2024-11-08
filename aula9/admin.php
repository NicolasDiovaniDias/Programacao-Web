<?php
require "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 8 php</title>
</head>
<body>
    <?php
        insertUser($connect);
    ?>
    <form method="post">
        <input type="text" name="nome" placeholder="seu nome: "required>
        <input type="email" name="email" placeholder="seu email: "required>
        <input type="password" name="senha" placeholder="sua senha: "required>
        <input type="submit" value="cadastrar usuario" name="cadastrar">
        
        
    </form>
</body>
</html>