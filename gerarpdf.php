<?php
//var_dump($_POST);
ob_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
	<table width="766" height="886" border="0">
		<tr>
			<td width="579" height="113" align="center" valign="baseline"><strong>
					CURRICULUM VITAE</strong></td>
			<td width="177" rowspan="2" align="center"><img src="images/cara.jpg"
				width="155" height="195" alt="" /></td>
		</tr>
		<tr>
			<td height="51" valign="bottom"><strong><h2>
						<?php echo $_POST['nome']?>
					</h2> </strong></td>
		</tr>
		<tr>
			<td height="107" colspan="2" valign="baseline"><p>
					<?php echo $_POST['nacionalidade'].", ".$_POST['ec'].", ".$_POST['idade']." Anos"?>
					<br>
					<?php echo $_POST['endereco']?>
					<br>
					<?php echo $_POST['cidade']." - ".$_POST['estado']?>
					<br>
					<?php echo "Telefone: ".$_POST['telefone']?>
					<br>
					<?php echo "Email: ".$_POST['email']?>
				</p>
				<p>
					<strong>Objetivo</strong><br>
					<?php echo $_POST['objetivo']?>
					s
				</p>
				<p>
					<strong>Formação</strong><br>
					<?php echo $_POST['curso'].", ".$_POST['conclusao'].$_POST['ano']?>
				</p>
				<p>
					<strong>Empresa onde trabalhou</strong><br>
					<?php echo $_POST['empresa']?>
				</p>
				<p>
					<strong>Qualificações e Atividades Complementares </strong><br>
					<?php echo @$_POST['ativ'][0]?>
					<br>
					<?php echo @$_POST['ativ'][1]?>
					<br>
					<?php echo @$_POST['ativ'][2]?>
					<br>
					<?php echo @$_POST['ativ'][3]?>
					<br>
					<?php echo @$_POST['ativ'][4]?>
				</p>
				<p>
					<strong>Informações Adicionais</strong><br>
					<?php echo @$_POST['info'][0]?>
					<br>
					<?php echo @$_POST['info'][1]?>
					<br>
					<?php echo @$_POST['info'][2]?>
				</p>
			</td>
		</tr>
	</table>
</body>
</html>
<?php 
$content = ob_get_clean();

require_once 'lib/html2pdf/html2pdf.class.php';
try {
	$html2pdf = new HTML2PDF('P','A4','en');
	$html2pdf->setDefaultFont('Arial');
	
	$html2pdf->writeHTML($content);
	$html2pdf->Output('Confirmacao.pdf');
} catch (HTML2PDF_exception $e) {
	echo $e;
}
?>
