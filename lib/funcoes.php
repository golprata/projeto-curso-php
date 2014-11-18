<?php

function enviarEmail($destinatario, $assunto, $mensagem, $remetente){

	$mail = new PHPMailer();
	$mail->IsSMTP(); // Define que a mensagem será SMTP
	$mail->Host = 'mail.khi.by'; // Endereço do servidor SMTP
	$mail->SMTPAuth = True; // usa autenticação SMTP (opcional)
	$mail->Username = 'alunos@khi.by'; // Usuario do servidor SMTP
	$mail->Password = 'alunos@php1'; // SENHA
	$mail->Port = 26;




	if (is_string($destinatario)){
		$mail->AddAddress($destinatario);
	}else if (is_array($destinatario)){
		foreach ($destinatario as $galera){
			$mail->AddAddress($galera);
		}


	}
	$mail->Subject = $assunto;
	$mail->MsgHTML($mensagem); // CONTEUDO
	$mail->From = $remetente[0];
	$mail->FromName = $remetente[1];
	@$enviou = $mail->Send();
	
	return $enviou;

}