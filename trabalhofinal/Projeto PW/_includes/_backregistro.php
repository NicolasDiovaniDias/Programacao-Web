<?php
session_start();
include_once "_conexao.php";
$senha = $_POST['senha'];
function login($conexao){
    if($_POST['senha']==$_POST['senha_2']){
        if (isset($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])){

            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

            $senha = $_POST['senha'];

            $senha_secreta = sha1($senha);

            $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);

            $query = "SELECT email FROM clientes WHERE email = ?";

            $stmt = mysqli_prepare($conexao, $query);

            mysqli_stmt_bind_param($stmt, "s", $email);

            mysqli_stmt_execute($stmt);

            $result = mysqli_stmt_get_result($stmt);

            $row = mysqli_fetch_assoc($result);
            if($row != null){
                echo "usuario ja cadastrado!";
                return;
            }
            $sql="INSERT INTO clientes (nome, email, telefone, senha) VALUES ('$nome','$email','$telefone','$senha_secreta')";

            if(mysqli_query($conexao,$sql)){
                echo "$nome cadastrado com sucesso";
            }
            else{
                echo "erro ao cadastrar";
                voltar();
            }
        }
        else{
            echo "preecha todos os campos!";
            voltar();
        }
    }
    else{
        echo "senhas diferentes!";
        voltar();
    }
}
function voltar(){
    header("Refresh: 3; url=../registro.php");
    
    echo "Você será redirecionado em 3 segundos...";
}
login($conexao);#aqui a função login pega a variavel conexao de dentro de _conexao.php que ta no include la de cima
mysqli_close($conexao);
?>