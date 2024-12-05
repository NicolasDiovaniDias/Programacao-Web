<?php
include_once "_conexao.php";

$query = "SELECT fk_cliente FROM produtos";

$stmt = mysqli_prepare($conexao, $query);

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

$row = mysqli_fetch_assoc($result);
// print_r($row);
for($i =0; $i<$qnt;$i++){
    if(isset($_SESSION['id_logado']) && $_SESSION['id_logado']!=''){
        ?>
            <a href="produto.php?id=<?php echo $lista[$i]['id_produtos']; ?>">
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
mysqli_close($conexao);
?>