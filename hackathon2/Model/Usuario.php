<?php
class Usuario{
	
	private $Id;
	private $Nome;
	private $Email;
	private $Senha;


	public function __construct($nome = null, $email = null, $senha = null){
		$this->Nome = $nome;
		$this->Email = $email;
		$this->Senha = $senha;
	}

	public function getNome(){
		return $this->Nome;
	}	

	public function getId(){
		return $this->Id;
	}	

	public function getEmail(){
		return $this->Email;
	}	

	public function getSenha(){
		return $this->Senha;
	}	

	public function setNome($nome){
		$this->Nome = $nome;
	}	

	public function setId($id){
		$this->Id = $id;
	}	

	public function setEmail($email){
		$this->Email = $email;
	}	

	public function setSenha($senha){
		$this->Senha = $senha;
	}

	
}