<?php
    session_start();
    $_SESSION['id_logado']='';
    header("Refresh: 0; url=../home.php");
?>