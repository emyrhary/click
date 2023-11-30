<?php
    include '../conexao.php';
    if (($_SERVER["REQUEST_METHOD"]=="POST")){
        $updateHeader = $_POST["updateHeader"];
        $updateProfilePic = $_POST["updateProfilePic"];
        $updateNome = $_POST["updateNome"];
        $updateUsername = $_POST["updateUsername"];
        $updateBio = $_POST["updateBio"];
        $email = $_POST["email"];

        $stmt =  "UPDATE perfil SET header = '$updateHeader', img_perfil = '$updateProfilePic', nome = '$updateNome', username = '$updateUsername', bio = '$updateBio' WHERE email = '$email'";
        $result = mysqli_query($conn, $stmt) or die(mysqli_error($db));

        $enviar_para = '../public/imgs/';

        header("location: /click/visao/perfil.php?usuario=". $updateUsername);
    }
?>