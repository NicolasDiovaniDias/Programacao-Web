<link rel="stylesheet" href="styles/header.css">    
<header>
    <nav>
        <ul>
            <a href="home.php"><li>home</li></a>
            <a href="login.php"><li>login</li></a>
            <a href="registro.php"><li>registrar-se</li></a>
            <a href="produtos.php"><li>produto</li></a>
            <?php
            session_start();
            if(isset($_SESSION['id_logado']) && $_SESSION['id_logado'] != ''){
                ?>
                <a href="_includes/_deslogar.php"><li>Deslogar</li></a>
                <?php
            }
            ?>
        </ul>
        <img src="imagens/logo.png" alt="logo espaço ideal">
    </nav>
</header>