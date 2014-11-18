<?php
session_start();

header('Content-Type: text/html; charset=UTF-8');
include '../lib/funcoes.php';
include '../lib/mysql.php';

require '../lib/phpMailer/class.phpmailer.php';


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
	
$remetente = array ("fabiano_81@hotmail.com","Fabiano Costa");

echo ($mensagem);
$enviou = enviarEmail("fabiano_81@hotmail.com", $_POST['assunto'], $mensagem, $remetente);

if ($enviou){
	$retorno = "Seu e-mail foi enviado com sucesso! :)";
} else {
	$retorno = "Deu zica! Tente mais tarde.";
}


//setcookie("feedback",$retorno, time()+3600,"/");  USO DE COOKIE
$_SESSION["feedback"] = $retorno;

var_dump($_POST);

header("location: ../retorno.php?id=".mysql_insert_id());
