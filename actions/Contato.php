<?php
 class Contato{
	private $id = null;
	private $nome = null;
	private $email = null;
	private $sexo = null;
	private $assunto = null;
	private $melhorHorario = null;
	private $mensagem = null;
	private $telefone = null;
	private $dataContato = null;
	
	public function Contato(){
		$this->id = "";
		$this->nome = "";
		$this->email = "";
		$this->assunto = ""; 
		$this->melhorHorario = ""; 
		$this->mensagem = "";
		$this->telefone = ""; 
		$this->dataContato = "";
	}
	public function setId($id){
		$this->id = $id;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function setSexo($sexo){
		$this->sexo = $sexo;
	}
	public function setAssunto($assunto){
		$this->assunto = $assunto;
	}
	public function setMelhorHorario($melhorHorario){
		$this->melhorHorario = $melhorHorario;
	}
	public function setMensagem($mensagem){
		$this->mensagem = $mensagem;
	}
	public function setTelefone($telefone){
		$this->telefone = $telefone;
	}
	public function setDataContato($dataContato){
		$this->dataContato = $dataContato;
	}
	public function getId(){
		return $this->id;
	}
	public function getNome(){
		return $this->nome;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getSexo(){
		return $this->sexo;
	}
	public function getAssunto(){
		return $this->assunto;
	}
	public function getMelhorHorario(){
		return $this->melhorHorario;
	}
	public function getMensagem(){
		return $this->mensagem;
	}
	public function getTelefone(){
		return $this->telefone;
	}
	public function getDataContato(){
		return $this->dataContato;
	}
	

}
$cont = new Contato();
$cont->setNome("Fabiano Costa");
echo $cont->getNome();
