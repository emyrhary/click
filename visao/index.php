<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    $logado = false;
} else {
    $logado = true;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>click!</title>
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
</body>
</html>