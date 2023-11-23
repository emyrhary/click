<?php
require "../conexao.php";
session_start();
if (!isset($_SESSION["usuario"])) {
    $logado = false;
} else {
    $logado = true;
}

    $selecionado = $_GET["usuario"];
    $stmt =  mysqli_prepare($conn, "SELECT * from perfil WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $selecionado);
    mysqli_stmt_execute($stmt);
    $selecionado = mysqli_stmt_get_result($stmt);
    $selecionado = mysqli_fetch_assoc($selecionado);

    $novoHeader = "";
    $novaImagem = "";
    $novoNome = "";
    $novousuario = "";
    $novabio = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edição! | <?=$selecionado["nome"]?> </title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/reset.css">
    <script src="https://kit.fontawesome.com/4c0a49f720.js" crossorigin="anonymous"></script>
    <script src="../public/js/script.js" defer></script>
</head>
<body>
    <?php
        include("../components/header.php")
    ?>
    <main id="perfil">
    <section id="seuPerfil">
            <div id="profileInfos">
                
                <label id="novoHeader">
                    <input type="file" style="display: none" id="inputHeader">
                    <i class="fa-solid fa-pencil"></i>
                    <img src="../public/imgs/<?=$selecionado["header"]?>" alt="" id="newHeader">
                </label>
                <label id="novaFoto">
                    <input type="file" style="display: none" id="inputPic">
                    <i class="fa-solid fa-pencil"></i>
                    <img src=
                        <?php
                            echo "../public/imgs/". $selecionado["img_perfil"]; 
                        ?>
                    >
                </label>
                   
            </div>
            <div id="usuario">
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="<?=$selecionado["nome"]?>">
                </div>
                <div>
                    <label for="username">username:</label>
                    <input type="text" name="username" value="<?=$selecionado["username"]?>">
                </div>
                <div>
                    <label for="biografia">Biorafia:</label>
                    <textarea name="biografia"><?=$selecionado["bio"]?></textarea>
                </div>
                
            </div>
        </section>
    </main>

    <script>
        
        const headerInput = document.getElementById("inputHeader");
        headerInput.addEventListener('change', function(evt) {
            let header = document.getElementById("newHeader");
            var r = new FileReader();
            r.onload = function() {
                header.src = r.result;
            }
            r.readAsDataURL(evt.target.files[0]);
            document.getElementById("newHeader").src = headerInput.value;
        })

        

    </script>
</body>
</html>