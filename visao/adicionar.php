<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    $logado = false;
    header("Location: /click/visao");
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
    <title>adicionar Post!</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/reset.css">
    <script src="https://kit.fontawesome.com/4c0a49f720.js" crossorigin="anonymous"></script>
    <script src="../public/js/script.js" defer></script>
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
        <form action="../processadores/processar-enviar-imagem.php"
            method="post"
            enctype="multipart/form-data" id="enviarFotos">

                <div id="adicionarArquivo">
                    <img src="#" alt="preview image" id="imagePreview">
                    <label>
                        <input type="file" id="imagemAdicionada" name="imagemAdicionada" accept="image/*" onchange="mudarImagem()" required>
                        Enviar Foto
                    </label>   
                </div>
                <div id="inputs">
                    <div class="inputContainer">
                        <label for="tituloDaImagem">Título:</label>
                        <input type="text" name="tituloDaImagem" id="tituloDaImagem" required>
                    </div>
                    
                    <div class="inputContainer">
                        <label for="descricaoDaImagem">Descrição:</label>
                        <textarea name="descricaoDaImagem" id="descricaoDaImagem" cols="30" rows="10" required></textarea>
                    </div>
                    
                    <input type="submit"  name="enviar" value="enviar imagem">
                </div>
        </form>
    </main>
</body>
</html>