<?php 
session_start();
include 'topo.php';?>
<body>
	<?php include 'menu.php';?>
	<div class="main">
		<div class="contact">
			<div class="wrap">
				<!---start-contact---->
				<div class="section group">
					<div class="col span_1_of_3">
						<div class="contact_info">
							<h3>Encontre nos aqui</h3>
							<div class="map">
								<iframe width="100%" height="400" frameborder="0" scrolling="no"
									marginheight="0" marginwidth="0"
									src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe>
								<br> <small><a
									href="https://www.google.co.in/maps/place/ighthouse+Point,+FL,+United+States/@-3.1289441,-60.0208871,16z/data=!4m2!3m1!1s0x926c0567d6e5a85b:0xf0db730c4985e2dc"
									style="color: #666; text-align: left; font-size: 0.85em">View
										Larger Map</a> </small>
							</div>
						</div>
					</div>
					<div class="col span_2_of_3">
						<div class="contact-form">
							<h3>Contate nos</h3>
							<form method="post" enctype="multipart/form-data"
								action="actions/recebedados.php">
								<div>
									<span><label>NOME</label> </span> <span><input name="userName"
										type="text" class="textbox" required="required"> </span>
								</div>
								<div>
									<span><label>Foto do perfil</label> </span> <span><input name="foto"
										type="file"> </span>
								</div>
								<div>
									<span><label>Assunto</label> </span> <span> <select
										name="assunto" required="required">
											<option value="">Selecione</option>
											<option value="Dúvidas">Dúvidas</option>
											<option value="Críticas">Críticas</option>
											<option value="Reclamações">Reclamações</option>
									</select>
									</span>
								</div>
								<div>
									<span><label>SEXO</label> </span> <span> <input type="radio"
										name="userSexo" value="M"><label>M</label> <input type="radio"
										class="textbox" name="userSexo" value="F"><label>F</label>
									</span>
								</div>
								<div>
									<span><label>TELEFONE</label> </span> <span><input
										name="telefone" type="text" class="textbox"
										required="required"> </span>
								</div>
								<div>
									<span><label>E-MAIL</label> </span> <span><input
										name="userEmail" type="email" class="textbox"
										required="required"> </span>
								</div>
								<div>
									<span><label>MELHOR HORARIO</label> </span> <span> <input
										name="melhorHorario[]" value="Manha" type="checkbox"
										class="textbox"><label>Manhã</label> <input
										name="melhorHorario[]" value="Tarde" type="checkbox"
										class="textbox"><label>Tarde</label> <input
										name="melhorHorario[]" value="Noite" type="checkbox"
										class="textbox"><label>Noite</label>
									</span>
								</div>
								<div>
									<span><label>Enviar Curriculum</label> </span> <span><input name="arquivo"
										type="file"> </span>
								</div>
								<div>
									<span><label>SUBJECT</label> </span> <span><textarea
											name="userMsg" required="required"></textarea> </span>
								</div>
								<div>
									<span><input type="submit" class="mybutton" value="Enviar"> </span>
								</div>

							</form>

						</div>
					</div>
				</div>
			</div>
			<!---End-contact---->
			<div class="clear"></div>
		</div>
	</div>
	<?php include 'rodape.php';
	?>
</body>
</html>

