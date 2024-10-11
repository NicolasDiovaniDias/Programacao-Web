<?php
// session_start();
// $user='admin@email.com';
// $pass='teste';
$usuarios=[
    "admin@gmail.com" => "teste",
    "nicolas@gmail.com" => "1234",
    "maico@gmail.com" => "maicoo"
];
if(isset($_POST['logar'])){
    $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    //if($user == $email AND $pass == $senha){
    if(array_key_exists($email,$usuarios)){
        if($usuarios[$email]==$senha){
        session_start();        
        $_SESSION['email'] = $email;
        $_SESSION['ativa'] = true;
        header("location : admin.php");
        }
        else{
            echo "senha incorreta!";
        }
    }
    else{
        echo "email ou senha incorretos";
    }
}
$_SESSION['nome'] ='ricagames';
$_SESSION['email'] ='ricagames@email.com';
$_SESSION['ativa'] = true;
echo "<a href='admin.php'>Acessar area administrativa</a>";