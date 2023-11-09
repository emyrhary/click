<?php   
    include("../components/imgPerfil.php")
?>

<header id="header">
    <a href="/click/visao" id="logo">click!</a>
    <div>
        <input type="text" name="pesquisa" id="pesquisa">
        <?php 
            if ($logado) {
                ?>
                <img src=
                    <?php
                        echo "../public/imgs/". $imgPerfil["img_perfil"]; 
                    ?>
                 onClick="toggleMenu()" class="profileImg">
                <div id="menu">
                    <h3>Bem vindo, <?=$imgPerfil["nome"]?></h3>
                
                    <a href="/click/visao/perfil.php?usuario=<?=$imgPerfil["username"]?>" class="editarperfil">
                        <i class="fa-solid fa-user"></i>
                        Meu Perfil
                    </a>
                    <a href="/click/processadores/processar-loggout.php?token=<?=md5(session_id())?>" class="deslogar">Sair</a>
                </div>
                <?php
            } else {
                ?>
                <div class="conta">
                    <a href="/click/visao/login.php">Entrar</a>
                    <a href="/click/visao/cadastro.php">Criar conta</a>
                </div>
                <?php
            }
        

        ?>
    </div>  
</header>