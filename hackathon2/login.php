<?php


require_once("C:/xampp/htdocs/hackathon2/conexao.php");
//require_once ("C:/xampp/htdocs/hackathon2/cabecalho.php");
require_once($var."/hackathon2/Model/Usuario.php");
require_once($var."/hackathon2/Banco/UsuarioBanco.php");
require_once($var."/hackathon2/Controller/UsuarioController.php");

$usuario = new Usuario();

	$usuario->setEmail($_POST['email']) ;
	$usuario->setSenha( $_POST['senha']);
	$_SESSION['email'] = $_POST['email'];

	$usuario = buscaUsuario($conexao, $usuario);
	if($usuario == null){
    	$_SESSION["danger"] = "Usuário ou senha inválido.";
    	header("Location: /hackathon2/View/loginErro.php");
	}else{
    	$_SESSION["success"] = "Logado com sucesso.";
    	logaUsuario($usuario["email"]);
    	header("Location: /hackathon2/View/home2.php");
	}
	
