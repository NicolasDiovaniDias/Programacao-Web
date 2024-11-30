<?php
session_start();
include_once "_conexao.php";
$senha = $_POST['senha'];
function login($conexao){
    if (!empty($_POST['email']) && !empty($_POST['senha'])){

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        $senha = $_POST['senha'];

        $senha_secreta = sha1($senha);

        $query = "SELECT email,senha FROM clientes WHERE email = ?";

        $stmt = mysqli_prepare($conexao, $query);

        mysqli_stmt_bind_param($stmt, "s", $email);
        
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        $row = mysqli_fetch_assoc($result);

        if($row['email']==$email && $row['senha']==$senha_secreta){

            echo "usuario ja cadastrado!";

            header("Refresh: 3; url=../home.php");

            echo "Você será redirecionado em 3 segundos...";
            
        }
        else{
            echo "senha ou email errados! ";
        }
    }
    else{
        echo "preecha todos os campos!";
    }
}
login($conexao);#aqui a função login pega a variavel conexao de dentro de _conexao.php que ta no include la de cima
mysqli_close($conexao);
?>