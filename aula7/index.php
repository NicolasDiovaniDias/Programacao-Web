<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        input{
            display:block;
            margin-top:10px;
        }
    </style>
</head>
<body>
    <form method="post" action="functions.php">
        <input type="email" name="email" placeholder="seu email" require>
        <input type="password" name="senha" placeholder="sua senha" require>
        <input type="submit" name="logar" value="Acessar">
    </form>
</body>
</html>