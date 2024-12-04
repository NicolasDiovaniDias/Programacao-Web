<?php
session_start();
include_once "_conexao.php";
function enviar($conexao){
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    $preco_total = filter_input(INPUT_POST, 'preco_total', FILTER_SANITIZE_NUMBER_INT);
    $preco_aluguel = filter_input(INPUT_POST, 'preco_aluguel', FILTER_SANITIZE_NUMBER_INT);
    $metros = filter_input(INPUT_POST, 'metros', FILTER_SANITIZE_NUMBER_INT);
    $quartos = filter_input(INPUT_POST, 'quartos', FILTER_SANITIZE_NUMBER_INT);
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
    if(isset($_FILES['foto'])){
        $foto = $_FILES['foto'];
        if($foto['size']> 2097152){
            die("arquivo muito grande MAX=2mb");
        }
        var_dump($_FILES['foto']);
        $pasta="arquivos/"; 
        $nomedoarquivo = $foto['name'];
        $novonome = uniqid();
        
        $extensao = strtolower(pathinfo($nomedoarquivo, PATHINFO_EXTENSION));//converte o caminho pra minusculo pra depois pegar o tipo do arquivo
        $path_salvar = "../arquivos/" . $novonome . "." . $extensao;
        $path = $pasta . $novonome . "." . $extensao;
        if ($extensao != "jpg" && $extensao != "png" && $extensao != "jpeg" && $extensao != "webp"){
            echo "tipo de arquivo indesejado";
        }
        else{
            $salvar_foto = move_uploaded_file($foto["tmp_name"],$path_salvar);
            $sql="INSERT INTO produtos (descricao, preco_total, preco_aluguel, metros, quartos, endereco, foto_caminho, foto_nome) VALUES ('$descricao','$preco_total','$preco_aluguel','$metros', '$quartos', '$endereco', '$path', '$nomedoarquivo')";
            if(mysqli_query($conexao,$sql)){
            echo "imóvel cadastrado com sucesso";
            }
            else{
                echo "erro ao cadastrar";
                voltar();
            }
        }
    }
    // else{
    //     echo "aaaa";
    // }
}
function voltar(){
    header("Refresh: 3; url=../registro.php");
    
    echo "Você será redirecionado em 3 segundos...";
}
enviar($conexao);#aqui a função login pega a variavel conexao de dentro de _conexao.php que ta no include la de cima
mysqli_close($conexao);
?>