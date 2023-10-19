<?php
require "../conexao.php";
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
    <title>Perfil!</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/reset.css">
    <script src="https://kit.fontawesome.com/4c0a49f720.js" crossorigin="anonymous"></script>
    <script src="../public/js/script.js" defer></script>
</head>
<body>
    <?php
        include("../components/header.php")
    ?>
    <main>
        <section id="mostrarinfos">
            <div>
                <button>
                    <img src=
                        <?php
                            echo "../public/imgs/". $imgPerfil["img_perfil"]; 
                        ?>
                    class="profile">
                </button>
                <input type="text" name="profileName" id="profileName" value="@<?=$imgPerfil["username"]?>" placeholder="insira seu username desejado" class="username">
                
            </div>
            <div id="nomeebio">
                <input type="text" name="profileName" id="profileName" value="<?=$imgPerfil["nome"]?>" placeholder="insira seu nome">
                <textarea name="profileBio" id="profileBio" cols="30" rows="10" value="<?=$imgPerfil["bio"]?>" placeholder="insira sua bio" ></textarea>
            </div>

        </section>
    </main>
</body>
</html>