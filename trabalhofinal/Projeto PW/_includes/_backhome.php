<?php
include_once "_conexao.php";
session_start();
for($i =0; $i<$qnt;$i++){
?>
<div class="produtos">
    <a href="#"></a>
    <img src="imagens/banner.jpg" alt="">
    <div>
        <p class="descricao"><?php
        echo $lista[$i]['descricao'];
        ?></p>    
        <h1>R$<?php
        echo $lista[$i]['preco_total'];
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
<?php
}
mysqli_close($conexao);
?>