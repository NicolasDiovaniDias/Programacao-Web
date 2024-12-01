<?php
if(isset($_FILES['foto'])){
    $foto = $_FILES['foto'];
    if($foto['size']> 2097152){
        die("arquivo muito grande MAX=2mb");
    }
    var_dump($_FILES['foto']);
    $pasta="arquivos/"; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="" enctype="multipart/form-data">
        <p><label for=""> selecione o arquivo</label>
        <input type="file" name="foto" id=""></p>
        <button name="upload" type="submit"> enviar arquivo</button>
    </form>
</body>
</html>