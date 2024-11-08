<?php
$server = "localhost";
$userdb = "root";
$passdb = "";
$namedb = "bancolegal";
$connect = mysqli_connect($server,$userdb,$passdb,$namedb);
function insertUser($connect){
    if(isset($_POST['cadastrar']) and !empty($_POST['email']) and !empty($_POST['senha'])){
        $nome = mysqli_real_escape_string($connect, $_POST['nome']);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $email = mysqli_real_escape_string($connect, $email);
        $senha = sha1($_POST['senha']);
        $query = "INSERT INTO usuarios(nome, email, senha, data_cadastro) VALUES ('$nome','$email','$senha', NOW())";
        $action = mysqli_query($connect, $query);
        if ($action){
            echo "usuario inserido com sucesso";
        }
        else{
            echo "erro ao inserir usuario";
        }
    }
}
function logar($connect){
    if(isset($_POST['logar'])){
        $erros = [];
        $email = mysqli_real_escape_string($connect,$_POST['email']);
        $senha = sha1($_POST['senha']);
        if(empty($email) and empty($senha)){
            $erros[] = "email e senhas n podem estar vazios";
        }
        if(empty($erros)){
            $query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $action = mysqli_query($connect, $query);
            $result = mysqli_fetch_assoc($action);
            if(!empty($result['email'])){
                session_start();
                $_SESSION['email'] = $result['email'];
                $_SESSION['nome'] = $result['nome'];
                header("location: admin.php");
            }
            else{
                echo "login ou senha incorretos";
            }
        }
    }
}
?>