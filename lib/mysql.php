<?php


// conexao normal
@$link = mysql_connect("localhost","root","");

mysql_select_db("buriphp", $link);

$melhorHorario = implode(",",$_POST["melhorHorario"]);
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

var_dump($retorno);


