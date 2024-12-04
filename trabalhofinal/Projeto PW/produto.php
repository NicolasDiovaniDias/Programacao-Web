<?php
include_once "_includes/_conexao.php";
$id = $_GET['id'];
$query = "SELECT * FROM produtos WHERE id_produtos = ?";

$stmt = mysqli_prepare($conexao, $query);

mysqli_stmt_bind_param($stmt, "i", $id);

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

$row = mysqli_fetch_assoc($result);

print_r($row);
?>