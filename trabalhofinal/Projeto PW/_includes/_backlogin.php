<?php
session_start();
include_once "_conexao.php";
$senha = $_POST['senha'];
function login($conexao){
    if (!empty($_POST['email']) && !empty($_POST['senha'])){

        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

        $senha = $_POST['senha'];

        $senha_secreta = sha1($senha);

        $query = "SELECT email, senha, id_clientes FROM clientes WHERE email = ?";

        $stmt = mysqli_prepare($conexao, $query);

        mysqli_stmt_bind_param($stmt, "s", $email);
        
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        $row = mysqli_fetch_assoc($result);

        if($row == null){
            echo "senha ou email invalidos! ";

            voltar();
        }
        else{
            if($senha_secreta==$row['senha']){
                echo "senha correta";

                echo "logado";

                voltar();
    
            }
            else{
                echo "senha incorreta";
                voltar();
            }
        }
    }
    else{
        echo "preecha todos os campos!";
        voltar();
    }
}
function voltar(){
    header("Refresh: 3; url=../login.php");    
    echo "Você será redirecionado em 3 segundos...";
}
login($conexao);#aqui a função login pega a variavel conexao de dentro de _conexao.php que ta no include la de cima
mysqli_close($conexao);
?>