<?php
require "../conexao.php";
require "Autenticacao.php";

if ($_SERVER["REQUEST_METHOD"] =="POST"){
    $email = $_POST["email"];
    $senha = $_POST["Senha"];
    
    $login = new autenticacao($conn);
    $usuario = $login->verificarUsuario($email, $senha);
    if ($usuario){
        session_start();
        $_SESSION["usuario"] = $usuario;
        header("Location: /click/visao");
        exit;
    }else{
        header("Location: /click/visao/login.php?erro=1");
    }
}
?>