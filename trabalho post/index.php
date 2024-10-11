<!--Crie um arquivo que contenha: 
Formulário HTML para o usuário digitar uma busca.
Lógica para mostrar se foi encontrado o valor procurado em formulario.php
Crie um array com os seguintes valores: [ PHP, HTML, CSS, JavaScript, Jquery, Python, SQL, Bootstrap, Java, C++, Fluter ]
Se o usuário encontrar um valor acima, mostre a seguinte mensagem "Temos o curso para a sua busca $valorda busca"
Se não encontrar mostre uma mensagem avisando o usuário.-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca de Cursos</title>
</head>
<body>
    <h1>Busca de Cursos</h1>
    <form method="POST" action="">
        <label for="curso">digite o curso:</label>
        <input type="text" id="curso" name="curso" required>
        <button type="submit">Buscar</button>
    </form>
    <?php
    $cursos = ['PHP', 'HTML', 'CSS', 'JavaScript', 'Jquery', 'Python', 'SQL', 'Bootstrap', 'Java', 'C++', 'Flutter'];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $busca = trim($_POST['curso']); 
        if (in_array($busca, $cursos)) {
            echo "curso encontrado: $busca";
        } else {
            echo "curso n encontado";
        }
    }
    ?>
</body>
</html>