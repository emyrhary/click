<?php
require "../conexao.php";
session_start();
if (!isset($_SESSION["usuario"])) {
    $logado = false;
} else {
    $logado = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post!</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/reset.css">
    <script src="https://kit.fontawesome.com/4c0a49f720.js" crossorigin="anonymous"></script>
    <script src="../js/script.js" defer></script>
</head>
<body>
    <header id="header">
        <a href="/click/visao" id="logo">click!</a>
        <div>
            <input type="text" name="pesquisa" id="pesquisa">
            <?php 
                if ($logado) {
                    echo
                    '<img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" onClick="toggleMenu()" class="profileImg">
                    <div id="menu">
                        <h3>Deseja sair do seu perfil?</h3>
                    
                        <a href="/click/processadores/processar-loggout.php?token='.md5(session_id()).'" class="deslogar">Sair</a>
                    </div>';
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
        <?php
            if ($logado) {
                echo
                    '<a id="adicionarPost" href="/click/visao/adicionar.php">
                        
                         +
                        
                    </a>';
                };
        ?>
        <section id="firstContainer">
            <?php
                if(isset($_GET['id'])) {
                    $post = $_GET['id'];
                    $comando = "SELECT * FROM posts WHERE url = ?";
                    $stmt = mysqli_prepare($conn, $comando);
                    mysqli_stmt_bind_param($stmt, "s", $post);
                    mysqli_stmt_execute($stmt);
                    $postEscolhido = mysqli_stmt_get_result($stmt);

                    if ($postEscolhido) {
                        $imagem = mysqli_fetch_assoc($postEscolhido);?>
                        
                        <div id="postContainer">
                            <div id="fotoPublicada">
                                <figure>
                                    <img src="../public/imgs/<?=$imagem['url']?>">
                                    <figcaption>
                                        <h3><?=$imagem['titulo']?></h3>
                                        <i class="fa-solid fa-thumbtack"></i>
                                    </figcaption>
                                </figure>
                            </div>
                            <div id="informacoesPublicadas">
                                <div id="perfilPublicado">
                                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"class="profileImg">
                                    <h3>
                                    @tal pessoa
                                    </h3>
                                </div>
                                <div id="descricao">
                                    <p><?=$imagem['descricao']?></p>
                                </div>
                            </div>
                        </div>

                        <?php
                    } else {
                        echo "Nenhum post encontrado.";
                    }

                    
                    mysqli_stmt_close($stmt);
                    mysqli_close($conn);
                } else {
                    echo "Algo deu errado";
                }
            ?>
        </section>
    </main>
    
</body>
</html>