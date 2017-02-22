<?php
require_once("C:/xampp/htdocs/hackathon2/conexao.php");
require_once($var."/hackathon2/Model/Usuario.php");

function buscaUsuario($conexao, Usuario $usuario){

	//$usuario->setSenha($usuario->getSenha());
	$usuario->setEmail(mysqli_real_escape_string($conexao, $usuario->getEmail()));
	$query = "select * from usuario where email = '{$usuario->getEmail()}' and senha = '{$usuario->getSenha()}'";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function insereUsuario($conexao, Usuario $usuario){

	$usuario->setSenha(md5($usuario->getSenha()));
	$usuario->setEmail(mysqli_real_escape_string($conexao, $usuario->getEmail()));
	$usuario->setNome(mysqli_real_escape_string($conexao, $usuario->getNome()));

	$usuarioCadastrado = "select * from usuarios where email = '{$email}'";
	if(isset($usuarioCadastrado)){
		return;
	}
	$query = "insert into usuario(nome, email, senha) values ('{$nome}','{$email}','{$senhaMD5}')";
	$resultado = mysqli_query($conexao, $query);
	if($resultado != null){
		echo "Cadastro realizado com sucesso";
	}
	else
		echo "usuario não cadastrado";
}

function removeUsuario($conexao, $email){
	$query = "delete from usuario where email = '{$email}'";
	$resultado = mysqli_query($conexao, $query);
}

function buscaId($conexao, $email){
	$query = "select id from usuario where email = '{$email}'";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado)['id'];
}

