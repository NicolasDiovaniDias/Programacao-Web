<?php
for ($i=1; $i<=6;$i++){
    echo "<H$i>Titulo $i</h$i>";
    echo "<br>";
}
$a=1;
while ($a <= 6) {
    echo "<H$a>Titulo $a</h$a>";
    echo "<br>";
    $a++;
}
echo "<hr>";
echo 10 > 25 ? "verdadeiro" : "falso";
$media_final=7;
echo "<br>";
echo $media_final > 6 ? "aprovado" : "reprovado";
echo "<hr>";
$idade = 84;
switch($idade){
    case $idade<18:
        echo "MENOR DE IDADE";
        break;
    case $idade<40:
        echo "meia idade";
        break;
    case $idade<50:
        echo "veio";
        break;
    case $idade>50:
        echo "senil";
}
echo "<hr>";
$nicolas="alun";
switch ($nicolas) {
    case 'aluno':
        echo "nicolas";
        break;
    case 'nicolas':
        echo "aluno";
        break;
    default:
        echo "minino";
};

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
    
</body>
</html>