<?php
require_once '../config/conexaoSingleton.php';
require_once '../lib/funcoes.php';
require_once '../actions/Contato.php';
require_once '../actions/ContatoFactory.php';
require_once '../actions/ContatoDAO.php';
session_start ();
header ( 'Content-Type: text/html; charset=UTF-8' );
ini_set ( "upload_max_filesize ", "50MB" );
$anexos = array ();
// Valida se o campo imagem Ã© vÃ¡lido
if (! strstr ( $_FILES ["foto"] ["type"], "image" )) {
	$_SESSION ["feedback"] = "Sua foto deve ser um arquivo de imagem válido";
	header ( "location: ../contact.php" );
	exit ();
} else {
	$novo_local = "../arquivos/perfil/";
	if (! is_dir ( $novo_local )) {
		mkdir ( $novo_local );
	}
	$novo_local .= "foto_perfil_";
	$novo_local .= strtolower ( trim ( $_POST ["userName"] ) );
	$ext = pathinfo ( $_FILES ['foto'] ['name'], PATHINFO_EXTENSION );
	$novo_local .= "." . $ext;
	// adiciona o arquivo no array de anexos
	array_push ( $anexos, $novo_local );
	$retorno = move_uploaded_file ( $_FILES ["foto"] ["tmp_name"], $novo_local );
}

// Valida se o campo PDF é válido
if (! strstr ( $_FILES ["arquivo"] ["type"], "pdf" )) {
	$_SESSION ["feedback"] = "Seu curriculum deve ser um arquivo PDF vÃ¡lido.";
	header ( "location: ../contact.php" );
	exit ();
} else {
	$novo_local = "../arquivos/curriculum/";
	$novo_local .= "curriculum_perfil_";
	$novo_local .= strtolower ( trim ( $_POST ["userName"] ) );
	$ext = pathinfo ( $_FILES ["arquivo"] ["name"], PATHINFO_EXTENSION );
	$novo_local .= "." . $ext;
	
	// Adiciona o arquivo no array de anexos
	array_push ( $anexos, $novo_local );
	
	$retorno = move_uploaded_file ( $_FILES ["arquivo"] ["tmp_name"], $novo_local );
}

// 1. Prepara a mensagem que vai pro email
$mensagem = "Nome: </br> " . $_POST ['userName'] . "</br></br>" . "E-Mail: </br> " . $_POST ['userEmail'] . "</br></br>" . "Mensagem: </br> " . $_POST ['userMsg'] . "</br></br>" . "Sexo: </br> " . $_POST ['userSexo'] . "</br></br>";

if (count ( $_POST ["melhorHorario"] ) > 0) {
	$mensagem .= "Melhor horario: <br/>";
	foreach ( $_POST ["melhorHorario"] as $horario ) {
		$mensagem .= $horario . '<br/>';
	}
}

// Define o remetente
$remetente = array (
		"fabiano_81@hotmail.com",
		"Fabiano Costa" 
);

// chamando a conexao
$conexao = Conexao::getInstance()->getConexao();
// instanciando uma DAO
$daoContato = new ContatoDAO($conexao);

// Instancia um objeto da classe FACTORY para criar um objeto Contato()
$contato = new ContatoFactory();
$obj = ContatoFactory::create($_POST);


$id = $daoContato->cadastrar($obj);

// retorna o ultimo registro cadastrato
$contatoCadastrado = $daoContato->buscarContato(mysql_insert_id());


// Envia o e-mail
 $enviou = enviaEmail($_POST["userEmail"], $_POST["assunto"], $mensagem, $remetente, $anexos);
 if ($enviou) {
  $retorno = "Seu e-mail foi enviado com sucesso! :)";
  } else {
  $retorno = "Email não enviado! Tenta mais tarde.";
  } 
$_SESSION ["feedback"] = $retorno;
$_SESSION["cadastrado"] = $contatoCadastrado;
// setcookie("feedback",$retorno,time()+3600,"/");
header ( "location: ../retorno.php" );