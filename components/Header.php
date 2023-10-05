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
                        if ($imgPerfil["img_perfil"]) {
                            echo "../public/imgs/". $imgPerfil["img_perfil"];
                        } else {
                            echo "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png";
                        }
                    ?>
                 onClick="toggleMenu()" class="profileImg">
                <div id="menu">
                    <h3>Deseja sair do seu perfil?</h3>
                
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