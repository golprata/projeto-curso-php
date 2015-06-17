<?php
class Contato {
	private $id;
	private $nome;
	private $email;
	private $sexo;
	private $assunto;
	private $melhorHorario;
	private $mensagem;
	private $telefone;
	private $dataCadastro;
	
	public function __construct($nome = null, $email = null, $sexo = null, $assunto = null, $melhorHorario = null, $mensagem = null, $telefone = null, $dataCadastro = null) {
		$this->id = null;
		$this->nome = $nome;
		$this->email = $email;
		$this->sexo = $sexo;
		$this->assunto = $assunto;
		$this->melhorHorario = $melhorHorario;
		$this->mensagem = $mensagem;
		$this->telefone = $telefone;
		$this->dataCadastro = $dataCadastro;
	}
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
		return $this;
	}
	public function getEmail() {
		return $this->email;
	}
	public function setEmail($email) {
		$this->email = $email;
		return $this;
	}
	public function getSexo() {
		return $this->sexo;
	}
	public function setSexo($sexo) {
		$this->sexo = $sexo;
		return $this;
	}
	public function getAssunto() {
		return $this->assunto;
	}
	public function setAssunto($assunto) {
		$this->assunto = $assunto;
		return $this;
	}
	public function getMelhorHorario() {
		return $this->melhorHorario;
	}
	public function setMelhorHorario($melhorHorario) {
		$this->melhorHorario = $melhorHorario;
		return $this;
	}
	public function getMensagem() {
		return $this->mensagem;
	}
	public function setMensagem($mensagem) {
		$this->mensagem = $mensagem;
		return $this;
	}
	public function getTelefone() {
		return $this->telefone;
	}
	public function setTelefone($telefone) {
		$this->telefone = $telefone;
		return $this;
	}
	public function getDataCadastro() {
		return $this->dataCadastro;
	}
	public function setDataCadastro($dataCadastro) {
		$this->dataCadastro = $dataCadastro;
		return $this;
	}
// 	public function inserirContato() {
// 		$query = "INSERT INTO contato (nome, email, sexo, assunto, melhorHorario,mensagem, telefone, dataCadastro) VALUES ('" . $this->nome . "','" . $this->email . "','" . $this->sexo . "','" . $this->assunto . "','" . $this->melhorHorario . "','" . $this->mensagem . "','" . $this->telefone . "','" . $this->dataCadastro . "')";
		
// 		$result = mysql_query ( $query );
// 		return $result;
// 	}
}



