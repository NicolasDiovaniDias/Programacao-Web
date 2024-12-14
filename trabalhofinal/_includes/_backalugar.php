<?php
    session_start();
    include_once "_conexao.php";
    $id = $_GET['id_produto'];
    $cliente = $_SESSION['id_logado'];
    $query = "UPDATE produtos SET fk_cliente = ? WHERE id_produtos = ?";
    $stmt = mysqli_prepare($conexao, $query);
    mysqli_stmt_bind_param($stmt, "ii", $cliente, $id);
    mysqli_stmt_execute($stmt);
    header("Refresh: 0; url=../home.php");
?>