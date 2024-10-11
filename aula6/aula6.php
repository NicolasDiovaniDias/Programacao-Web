<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>trabalhando post</title>
        <style>
            input{
                display:block;
                margin-top:12px;
            }
        </style>
    </head>
    <body>
        <form action="" method="post">
            <label>Seu nome:</label>
            <input type="text" name="nome">

            <label>seu email:</label>
            <input type="email"name="email">

            <label>sua idade:</label>
            <input type="number" name="idade">

            <input type="submit" name="enviar" value="cadastrar">
        </form>
        <?php
        if(isset($_POST['enviar'])){
            //print_r($_POST);
            $erros = array();
            if(strlen($_POST['nome'])>=3){
                $nome = filter_input(INPUT_POST,"nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                //$nome = $_POST['nome'];
            }
            else{
                $erros[] = "preencha seu nome completo";
            }
            //EMAIL
            $validateemail=filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
            if(!empty($validateemail)){
                $email = $validateemail;
                //$email = $_POST['email'];
            }
            else{
                $erros[]="preencha seu email corretamente.";
            }
            //NUMBER
            if($_POST['idade']>6){
                $idade = filter_input(INPUT_POST,'idade',FILTER_SANITIZE_NUMBER_INT);
                //$idade = $_POST["idade"];
            }
            else{
                $erros[]="entrada permitida a partir de 7 anos";
            }
            //passou pelas validações
            if(!empty($erros)){
                foreach($erros as $erro){
                    echo "$erro <br>";
                }
            }
            else{
                //continuamos o envio do formulario
                echo "<h2>informações enviadas</h2>
                        nome: $nome<br>
                        email: $email<br>
                        idade: $idade<br>";
            }
        }
        ?>
    </body>
</html>