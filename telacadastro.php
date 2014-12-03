<?php
include 'topo.php';?>

<!-- INICIO TELA DE CADASTRO -->
<body>
	<?php include 'menu.php';?>
	<div class="main">
		<div class="contact">
			<div class="wrap">
				<!---start-contact---->
				<div class="section group">
					<div class="col span_1_of_3"></div>
					<div class="col span_2_of_3">
						<div class="contact-form">
							<h3>Cadastre-se</h3>
							<form method="post" enctype="multipart/form-data"
								action="usuarioController.php">
								<div>
									<span><label>NOME</label> </span> <span><input name="nome"
										type="text" class="textbox" required="required"> </span>
								</div>
								<div>
									<span><label>CIDADE</label> </span> <span><input
										name="cidade" type="text" class="textbox"
										required="required"> </span>
								</div>
								<div>
									<span> <label>ESTADO</label>
									</span> <span> <select name="estado">
											<option value="estado">Selecione o Estado</option>
											<option value="ac">Acre</option>
											<option value="al">Alagoas</option>
											<option value="am">Amazonas</option>
											<option value="ap">Amapá</option>
											<option value="ba">Bahia</option>
											<option value="ce">Ceará</option>
											<option value="df">Distrito Federal</option>
											<option value="es">Espírito Santo</option>
											<option value="go">Goiás</option>
											<option value="ma">Maranhão</option>
											<option value="mt">Mato Grosso</option>
											<option value="ms">Mato Grosso do Sul</option>
											<option value="mg">Minas Gerais</option>
											<option value="pa">Pará</option>
											<option value="pb">Paraíba</option>
											<option value="pr">Paraná</option>
											<option value="pe">Pernambuco</option>
											<option value="pi">Piauí</option>
											<option value="rj">Rio de Janeiro</option>
											<option value="rn">Rio Grande do Norte</option>
											<option value="ro">Rondônia</option>
											<option value="rs">Rio Grande do Sul</option>
											<option value="rr">Roraima</option>
											<option value="sc">Santa Catarina</option>
											<option value="se">Sergipe</option>
											<option value="sp">São Paulo</option>
											<option value="to">Tocantins</option>
									</select>
									</span>
								</div>
								<div>
									<span><label>SEXO</label> </span> <span> <input type="radio"
										name="sexo" value="M"><label>Masculino</label> <input type="radio"
										class="textbox" name="sexo" value="F"><label>Femenino</label>
									</span>
								</div>
								<div>
									<span><label>DATA DE NASCIMENTO</label> </span> <span><input
										name="nascimento" type="text" class="textbox"
										required="required" OnKeyPress="formatar('##/##/####', this)"> </span>
								</div>
								<div>
									<span><label>TELEFONE</label> </span> <span><input
										name="telefone" type="text" class="textbox"
										required="required" OnKeyPress="formatar('##-####-####', this)"> </span>
								</div>
								<div>
									<span><label>E-MAIL</label> </span> <span><input
										name="email" type="email" class="textbox"
										required="required"> </span>
								</div>
								<div>
									<span><label>SENHA</label> </span> <span><input name="senha"
										type="password" required="required"> </span>
								</div>
								<div>
									<span><label>CONFIRME SUA SENHA</label> </span> <span><input
										name="confirmasenha" type="password" required="required"> </span>
								</div>
								<div>
									<span><input type="submit" class="mybutton" value="Enviar"> </span>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!--- FINAL DO CADASTRO ---->
			<div class="clear"></div>
		</div>
	</div>


	<?php include 'rodape.php';?>