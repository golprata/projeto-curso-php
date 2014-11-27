<?php
//var_dump($_POST);
session_start();
header('Content-Type: text/html; charset=UTF-8');
ini_set("upload_max_filesize ", "50MB");
include '../lib/funcoes.php';
include '../config/conexao.php';

$anexos = array();
//Valida se o campo imagem é válido
if(!strstr($_FILES["foto"]["type"],"image")){
	$_SESSION["feedback"] = "Sua foto deve ser um arquivo de imagem válido";
	header("location: ../contact.php");
	exit;
} else {
	$novo_local = "../arquivos/perfil/";
	if (!is_dir($novo_local)){
		mkdir($novo_local);
	}
	$novo_local.="foto_perfil_";
	$novo_local.=strtolower(trim($_POST["userName"]));
	$ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
	$novo_local.=".".$ext;
	// adiciona o arquivo no array de anexos
	array_push($anexos,$novo_local);
	$retorno = move_uploaded_file($_FILES["foto"]["tmp_name"],$novo_local);
}

//Valida se o campo PDF é válido
if(!strstr($_FILES["arquivo"]["type"],"pdf")){
	$_SESSION ["feedback"] = "Seu curriculum deve ser um arquivo PDF válido.";
	header ( "location: ../contact.php");
	exit;
} else {
	$novo_local = "../arquivos/curriculum/";
	$novo_local.="curriculum_perfil_";
	$novo_local.=strtolower(trim($_POST["userName"]));
	$ext = pathinfo($_FILES["arquivo"]["name"], PATHINFO_EXTENSION);
	$novo_local.=".".$ext;

	//Adiciona o arquivo no array de anexos
	array_push($anexos,$novo_local);

	$retorno = move_uploaded_file($_FILES["arquivo"]["tmp_name"],$novo_local);
}

// Prepara para salvar no banco
$melhorHorario = implode ( ",", $_POST["melhorHorario"]);
$dataCadastro = date("Y-m-d H:i:s");

$sql = "INSERT INTO
		contato (nome, email, sexo, assunto, melhorHorario,
		mensagem, telefone, dataContato)
		VALUES ('".$_POST["userName"]."',
				'".$_POST["userEmail"]."',
						'".$_POST["userSexo"]."',
								'".$_POST["assunto"]."',
										'".$melhorHorario."',
												'".$_POST["userMsg"]."',
														'".$_POST["telefone"]."',
																'".$dataCadastro."')";

$retorno = mysql_query($sql);

// 1. Prepara a mensagem
$mensagem = "Nome: </br> ".$_POST['userName']."</br></br>".
		"E-Mail: </br> ".$_POST['userEmail']."</br></br>".
		"Mensagem: </br> ".$_POST['userMsg']."</br></br>".
		"Sexo: </br> ".$_POST['userSexo']."</br></br>";

if (count($_POST["melhorHorario"]) > 0){
	$mensagem .= "Melhor horario: <br/>";
	foreach ($_POST["melhorHorario"] as  $horario){
		$mensagem.= $horario.'<br/>';
	}
}

// Prepara
$remetente = array("fabiano_81@hotmail.com","Fabiano Costa");


// Envia o e-mail
$enviou = enviaEmail($_POST["userEmail"], $_POST["assunto"], $mensagem, $remetente, $anexos);
//$enviou = enviaEmail("fabiano.81@gmail.com", $_POST["assunto"], $mensagem, $remetente, $anexos );

if ($enviou) {
	$retorno = "Seu e-mail foi enviado com sucesso! :)";
} else {
	$retorno = "Deu zica! Tenta mais tarde.";
}

$_SESSION ["feedback"] = $retorno;
// setcookie("feedback",$retorno,time()+3600,"/");
header ( "location: ../retorno.php?id=" . mysql_insert_id () );