<?php
class Servico{
	
	private $Id;
	private $Nome;
	private $Valor;

	public function __construct($nome = null, $valor = null){
		$this->Nome = $nome;
		$this->Valor = $valor;
	}

	public function getNome(){
		return $this->Nome;
	}	

	public function getId(){
		return $this->Id;
	}	

	public function getValor(){
		return $this->Valor;
	}		

	public function setNome($nome){
		$this->Nome = $nome;
	}	

	public function setId($id){
		$this->Id = $id;
	}	

	public function setValor($valor){
		$this->Email = $valor;
	}	
}