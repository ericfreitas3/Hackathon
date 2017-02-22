<?php
require_once("conecta.php");
require_once("Classes/UsuarioServico.php");

function adicionaUsarioServico($conexao, $idUsuario, $idServico){
	$query = "insert into servico_usuario (idServico, idUsuario) values ('{$idUsuario}, '{$idServico}')";
	$resultado =  mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);

}

function removeUsarioServico($conexao, $idUsuario, $idServico){
	$query = "DELETE FROM servico_usuario WHERE idUsuario ='{$idUsuario}' AND idServico = '{$idServico}'";
	$resultado =  mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);

}

function buscaUsuarioServico($conexao, $idUsuario){
	$query = "SELECT FROM servico_usuario WHERE idUsuario ='{$idUsuario}'";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}
