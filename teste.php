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

							<h3>Faça seu curriculum aqui</h3>
							<form method="post" name="formcurriculum" onsubmit="return validaCampos();" action="gerarpdf.php">
								<div>
									<span><label>Nome</label> </span> <span><input name="nome"
										type="text" class="textbox"> </span>
								</div>
								<div>
									<span><label>Nacionalidade</label> </span> <span><input
										name="nacionalidade" type="text" class="textbox"
										> </span>
								</div>
								<div>
									<span><label>Estado Civil</label> </span> <span><input
										name="ec" type="text" class="textbox" > </span>
								</div>
								<div>
									<span><label>Idade</label> </span> <span><input name="idade"
										type="text" class="textbox" > </span>
								</div>
								<div>
									<span> <label>Endereço</label>
									</span> <span><input name="endereco" type="text"
										class="textbox" > </span>
								</div>
								<div>
									<span> <label>Estado</label>
									</span> <span> <select class="select" name="estado"
										>
											<option value="estado">Selecione o Estado</option>
											<option value="AC">Acre</option>
											<option value="AL">Alagoas</option>
											<option value="AM">Amazonas</option>
											<option value="AP">Amapá</option>
											<option value="BA">Bahia</option>
											<option value="CE">Ceará</option>
											<option value="DF">Distrito Federal</option>
											<option value="ES">Espírito Santo</option>
											<option value="GO">Goiás</option>
											<option value="MA">Maranhão</option>
											<option value="MT">Mato Grosso</option>
											<option value="MS">Mato Grosso do Sul</option>
											<option value="MG">Minas Gerais</option>
											<option value="PA">Pará</option>
											<option value="PB">Paraíba</option>
											<option value="PR">Paraná</option>
											<option value="PE">Pernambuco</option>
											<option value="PI">Piauí</option>
											<option value="RJ">Rio de Janeiro</option>
											<option value="RN">Rio Grande do Norte</option>
											<option value="RO">Rondônia</option>
											<option value="RS">Rio Grande do Sul</option>
											<option value="RR">Roraima</option>
											<option value="SC">Santa Catarina</option>
											<option value="SE">Sergipe</option>
											<option value="SP">São Paulo</option>
											<option value="TO">Tocantins</option>
									</select>
									</span>
								</div>
								<div>
									<span><label>Cidade</label> </span> <span><input name="cidade"
										type="text" class="textbox" > </span>
								</div>
								<div>
									<span><label>Telefone</label> </span> <span><input
										name="telefone" type="text" id="telefone" class="textbox"							
										> </span>
								</div>
								<div>
									<span><label>E-mail</label> </span> <span><input
										name="email" type="email" class="textbox"
										> </span>
								</div>
								<div>
									<span><label>Objetivo</label></span> <span><input name="objetivo" type="text"
										class="textbox" > </span>
								</div>
								<div>
									<span><label>curso</label></span> <span><input name="curso" type="text"
										class="textbox" > </span>
								</div>
								<div>
									<span> 
									</span> <span> <select class="select" name="conclusao"
										>
											<option value="">Escolha</option>
											<option value="Concluiso em: ">Concluido em:</option>
											<option value="Previsão de cunclusão: ">Previsão de cunclusão:</option>
											
									</select>
									</span>
								</div>
								<div>
									<span><label>Ano de conclusão</label></span> <span><input name="ano" type="text"
										class="textbox" > </span>
								</div>
								<div>
									<span><label>Empresa</label></span> <span><input name="empresa" type="text"
										class="textbox" > </span>
								</div>								
								<div id="atividade">
									<span><label>Atividades Complementares</label></span> <span><input name='ativ[]' type='text'
										class='textbox'> </span>										
								</div>															
								<span id="ativar">+ Atividades</span>
								<div>
									<span><label>Informações Complementares</label></span> <span><input name="info" type="text"
										class="textbox" > </span>
								</div>
								<div>
									<span><input type="submit" class="mybutton" value="cadastrar">
									
									</span>
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