<?php
require '../lib/phpMailer/class.phpmailer.php';
function enviaEmail($destinatario, $assunto, $mensagem, $remetente, $anexos = array()) {
	$mail = new PHPMailer ();
	
	// Define os dados do servidor e tipo de conexao
	$mail->IsSMTP (); // Define que a mensagem será SMTP
	$mail->Host = 'mail.khi.by'; // Endereço do servidor SMTP
	$mail->SMTPAuth = true; // Usa autenticaçao SMTP? (opcional)
	$mail->Username = 'alunos@khi.by'; // Usuário do servidor SMTP
	$mail->Password = 'alunos@php1'; // Senha do servidor SMTP
	$mail->Port = 26;
	
	// Trata o tipo de destinatário recebido
	if (is_string ( $destinatario )) {
		$mail->AddAddress ( $destinatario );
	} else if (is_array ( $destinatario )) {
		foreach ( $destinatario as $galera ) {
			$mail->AddAddress ( $galera );
		}
	}
	// Envia CC
	$mail->AddCC ( "fabiano_81@hotmail.com" );
	// Envia BCC
	// $mail->AddBCC ( "eder.franco@outlook.com" );
	
	$mail->Subject = $assunto; // Assunto
	$mail->MsgHTML ( $mensagem ); // Conteúdo
	$mail->From = $remetente [0]; // E-mail de quem envia
	$mail->FromName = $remetente [1]; // Nome de quem envia
	$mail->CharSet = 'UTF-8';
	
	// Verifica se tem anexos
	if (count ( $anexos ) > 0) {
		// Percorrer o array de anexos
		foreach ( $anexos as $anexo ) {
			// Adiciona cada arquivo como anexo
			$mail->AddAttachment ( $anexo );
		}
	}
	$enviou = @$mail->Send (); // Realiza o envio (retorna true/false)
	return $enviou;
	// var_dump($anexos);
}

// Verifica se o tipo arquivo é válido
function isTipoValido($tipos) {
	$tipos_permitidos = array (
			"image",
			"pdf" 
	);
	$tipoValido = false;
	foreach ( $tipos_permitidos as $perm ) {
		if (in_array ( $perm, $tipos )) {
			$tipoValido = true;
			break;
		}
	}
	return $tipoValido;
}
//$remetente = array("fabiano_81@hotmail.com","Fabiano Costa");
//$enviou = enviaEmail("fabiano_81@hotmail.com", "teste", "Testando coisas", $remetente);
//var_dump($enviou);