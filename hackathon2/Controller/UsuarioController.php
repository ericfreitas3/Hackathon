<?php
require_once("C:/xampp/htdocs/hackathon2/conexao.php");
require_once($var."/hackathon2/Model/Usuario.php");

session_start();
ob_start();
function usuarioEstaLogado(){
    return isset($_SESSION["usuario_logado"]);
}
 
function verificaUsuario(){
if(!usuarioEstaLogado()){
    $_SESSION["danger"] = "Não está logado.";
	header("Location: /hackathon2/View/loginErro.php");
    die();
}
}

function usuarioLogado(){
    return $_SESSION["usuario_logado"];
}

function logaUsuario($email){
    $_SESSION["usuario_logado"] = $email;

}

function logout(){
    session_destroy();
    session_start();
}

