<?php
require_once("C:/xampp/htdocs/hackathon2/conexao.php");
//require_once("Model/UsuarioServico.php");

function addServico($conexao, Servico $servico){
	$servico->setNome(mysqli_real_escape_string($conexao, $servico->getNome()));
	$servico>setValor(mysqli_real_escape_string($conexao, $servico->getValor()));
	$query = "insert into servico(nome, valor) values ('{$nome}','{$valor}'";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);
}

function removeServico($conexao, Servico $servico){
	$query = "delete from servico where nome = '{$servico->nome}'";
	$resultado = mysqli_query($conexao, $query);
}

function listaServicos($conexao, $id){
	$query = "select se.id as 'id', se.nome as 'nome', se.valor as 'valor' from servico se left join (select s.* from servico_usuario su join servico s on(su.idServico = s.id) where idUsuario = '{$id}') as te on (se.id = te.id) where te.id is null";
	$resultado = mysqli_query($conexao, $query);
	$servicos = array();
	while($row = mysqli_fetch_assoc($resultado)){
		$servico = new Servico();
		$servico->setNome($row['nome']);
		$servico->setValor($row['valor']);
		array_push($servicos, $servico);
	}
	return $servicos;
}

function listaServicosDeUsuario($conexao, $id){
	$query = "select s.* from servico_usuario su join servico s on(su.idServico = s.id) where idUsuario = '{$id}'";
	$resultado = mysqli_query($conexao, $query);
	$servicosUsuario = array();
	while($row = mysqli_fetch_assoc($resultado)){
		$servico = new Servico();
		$servico->setNome($row['nome']);
		$servico->setValor($row['valor']);
		array_push($servicosUsuario, $servico);
	}
	return $servicosUsuario;
}