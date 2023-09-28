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
    <main>
        <div id="adicionarPost">
            <button>
                +
            </button>
        </div>
        <section class="inner">
            <figure>
                <img src="../public/imgs/20191226_120128.jpg">
                <figcaption>
                    <h3>Nome da img</h3>
                </figcaption>
            </figure>
            <figure>
                <img src="../public/imgs/20191226_120223.jpg">
                <figcaption>
                    <h3>Nome da img</h3>
                </figcaption>
            </figure>
            <figure>
                <img src="../public/imgs/20211202_173046.jpg">
                <figcaption>
                    <h3>Nome da img</h3>
                </figcaption>
            </figure>
            <figure>
                <img src="../public/imgs/20200103_155250.jpg">
                <figcaption>
                    <h3>Nome da img</h3>
                </figcaption>
            </figure>
            <figure>
                <img src="../public/imgs/20200103_154924.jpg">
                <figcaption>
                    <h3>Nome da img</h3>
                </figcaption>
            </figure>
            <figure>
                <img src="../public/imgs/20211202_173033.jpg">
                <figcaption>
                    <h3>Nome da img</h3>
                </figcaption>
            </figure>
            <figure>
                <img src="../public/imgs/IMG-20210930-WA0219.jpg">
                <figcaption>
                    <h3>Nome da img</h3>
                </figcaption>
            </figure>
            <figure>
                <img src="../public/imgs/IMG-20210930-WA0082.jpg">
                <figcaption>
                    <h3>Nome da img</h3>
                </figcaption>
            </figure>
            <figure>
                <img src="../public/imgs/20200103_154152.jpg">
                <figcaption>
                    <h3>Nome da img</h3>
                </figcaption>
            </figure>
            <figure>
                <img src="../public/imgs/20191226_122131.jpg">
                <figcaption>
                    <h3>Nome da img</h3>
                </figcaption>
            </figure>
            <figure>
                <img src="../public/imgs/20211002_140847.jpg">
                <figcaption>
                    <h3>Nome da img</h3>
                </figcaption>
            </figure>
        </section>
    </main>
</body>
</html>