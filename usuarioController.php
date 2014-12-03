<?php
include 'config/conexao.php';
var_dump($_POST);
if($_POST['senha'] != $_POST['confirmasenha']){
	echo "Senha diferentes!!!";
}
else{

$query = "INSERT INTO usuarios (nomeUser, cidadeUser, estadoUser, sexoUser, dtNascUser, telefoneUser, emailUser, senhaUser)
		VALUES ('".$_POST['nome']."','"
				.$_POST['cidade']."','"
						.$_POST['estado']."','"
								.$_POST['sexo']."','"
										.$_POST['nascimento']."','"
												.$_POST['telefone']."','"
														.$_POST['email']."','"
																.$_POST['senha']."','"
																		.$_POST['confirmasenha']."')";

var_dump($query);
}