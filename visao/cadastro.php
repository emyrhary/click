<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    $logado = false;
} else {
    $logado = true;
    header("Location: /click/visao");
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/reset.css">
</head>
<body>
    <header id="header">
        <a href="/click/visao" id="logo">click!</a>
        <div>
            <input type="text" name="pesquisa" id="pesquisa">
            <?php 
                if ($logado) {
                    echo '<img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png">';
                } else {
                    echo '
                    <div class="conta">
                        <a href="/click/visao/login.php">Entrar</a>
                        <a href="/click/visao/cadastro.php">Criar conta</a>
                    </div>';
                }
        
            ?>
        </div>
    </header>
    <main id="formMain">
        <div id="formContainer">
            <h3>cadastre-se</h3>
            
            <form method="post" id="formulario" action="../processadores/processar-cadastro.php">
                <div class="inputContainer">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome">
                </div>
                <div class="inputContainer">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="inputContainer">
                    <label for="email">Senha:</label>
                    <input type="password" name="Senha" id="Senha">
                </div>
                <div class="inputContainer">
                    <label for="repeatPassword">Repita a senha:</label>
                    <input type="password" name="repeatPassword" id="repeatPassword">
                </div>
                <button type="submit" id="submit">Criar conta</button>
            </form>

            <?php 
            if(isset($_GET["erro"])){
                //echo "erro! senha e confirmar senha não são iguais";
            ?>
                <label for="erro"></br> senha e confirmar senha não são iguais.</label>
            <?php }
            ?>
        </div>
    </main>

    <?php    
    include 'conexao.php';
    include '../modelo/Usuario.php';
    ?>

    <footer></footer>
</body>
</html>