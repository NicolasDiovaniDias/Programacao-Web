<?php
$server = "localhost";
$userdb = "root";
$passdb = "";
$namedb = "bancolegal";

$connect = mysqli_connect($server,$userdb,$passdb,$namedb);

/* BUSCANDO DADOS DO BANCO */
$query = "SELECT * FROM usuarios";
$action = mysqli_query($connect, $query);
$result = mysqli_fetch_assoc($action);
print_r($result);
$results = mysqli_fetch_all($action,MYSQLI_BOTH);
echo "<pre>";
print_r($results);
?>
<table border="1">
    <thead>
        <tr>
            <th>nome</th>
            <th>email</th>
            <th>obs</th>
            <th>data</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($results as $result):?>
            <tr>
                <td>
                    <?php
                    echo $result['nome'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $result['email'];
                    ?>
                </td>
                <td>
                    <?php
                    echo $result['obs'];
                    ?>
                </td>
                <td>
                    <?php
                    $date = date_create($result['data_cadastro']);
                    echo date_format($date, "d/m/Y")
                    ?>
                </td>
                
            </tr>
        <?php endforeach?>
    </tbody>
    <table>
        <form method="post" action="" style="margin-top:40px">
            <input type="text" name="nome" placeholder="Seu Nome:" required>
            <input type="email" name="email" placeholder="Seu Email" required>
            <input type="password" name="senha" placeholder="crie uma senha">
            <textarea name="obs" style="display:block; margin:10px 0;"></textarea>
            <input type="submit" name="enviar" value="cadastrar usuario">
        </form>
        <?php
        if(isset($_POST['enviar'])){
            $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $senha = $_POST['senha'];
            $obs=filter_input(INPUT_POST, "obs", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            //comando que vai ser disparado no banco de dados
            $query = "ISERT INTO usuarios(nome,obs,email, senha,data_cadastro) VALUES($nome,$email,$senha,$obs,NOW())";
            $action = mysqli_query($connect,$query);

        }
        ?>
    </table>
</table>