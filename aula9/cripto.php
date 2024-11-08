<?php
echo $senha = "nicolas";
echo "<hr>";
echo $cripto = base64_encode($senha);
echo "<hr>";
echo base64_decode($cripto);
echo "<hr>";
echo md5($senha);
echo "<hr>";
echo $sha ="Sha1: " . sha1($senha);
echo "<hr>";
echo password_hash($senha, PASSWORD_DEFAULT);
?>