<?php
$dados = [
    'nome' => "Trunks",
    'mãe' => "Buma",
    'pai' => "Vegetta",
    'amigo' => "Goten",
    'mestre' => "Gohan"
];
foreach ($dados as $dado) {
    echo $dado;
    echo "<br>";
}
$indices = array_keys($dados);
print_r($indices);
$last = array_pop($dados);
print_r($last);
$first = array_shift($dados);
print_r($first);
echo "<hr>";
$valores = [12,12,4,5,678,23,74];
$soma = array_sum($valores);
echo "<h2></h2>";
$cidades = ["poa","eldorado","canoas","cachoeirinha"];
$buscar = "poa";
if(in_array($buscar,$cidades)){
    echo "A cidade pesquisada encontrasse em nosso cadastro - $buscar";
}
else{
    echo "a cidade pesquisada não consta no cadasreo";
}