<?php
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
                session_set_cookie_params(['httponly'=>True]);
                session_start();
                $_SESSION['id_logado']=$row["id_clientes"];
                $pagina = "home.php";
                voltar($pagina);
            }
            else{
                $pagina="login.php";
                voltar($pagina);
            }
        }
    }
    else{
        echo "preecha todos os campos!";
        $pagina="login.php";
        voltar($pagina);
    }
}
function voltar($pagina){
    header("Refresh: 0; url=../$pagina");
}
login($conexao);#aqui a função login pega a variavel conexao de dentro de _conexao.php que ta no include la de cima
mysqli_close($conexao);
?>