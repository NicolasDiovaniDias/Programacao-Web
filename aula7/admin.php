<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bem vindo ADM</title>
</head>
<body>
    <?php
    if(isset($_SESSION['ativa'])){
    ?>

    <h1>bem vindo ADM</h1>
    <h3>bem vindo <?php echo $_SESSION['nome']?></h3>
    <div>
        <a href="sair.php">Sair</a>
    </div>
<?php
}
else{
    echo "sem autorização";
} ?>
</body>
</html>