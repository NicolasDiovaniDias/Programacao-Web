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
<?php
    $cafeManha = array("maçã" , "café" , "queijão" , "uranio");
    echo "nicolas";
    echo "<hr>";
    echo $cafeManha[1];
    echo "<hr>";
    echo $cafeManha[2];
    echo "<hr>";
    print_r($cafeManha);
    echo "<hr>";
    $nicolas = array(
        "nome" => "nicolas",
        "idade" => 18,
        "cidade" => "eldorado",
        "signo" => "leão"
    );
    print_r($nicolas);
    echo "<hr>";
    $alunos = array(
        "nicolas" => [
            "nome" => "nicolas",
            "idade" => "18",
            "cursos" => ["ads","pmm"]
        ],
        "gabriel" => [
            "nome" => "gabriel",
            "idade" => "19",
            "cursos" => ["ads","moda"]
        ]
        );
        echo "<pre>";
        print_r($alunos);
        echo "</pre>";
        echo "<hr>";
        echo ($alunos["nicolas"]["nome"])
        ?>