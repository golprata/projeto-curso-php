<?php 
$index="";
$about="";
$services="";
$contact="";
$cadastro="";
if(strpos($_SERVER['PHP_SELF'],"index.php"))
	$index='active';
else if(strpos($_SERVER['PHP_SELF'],"about.php"))
	$about='active';
else if(strpos($_SERVER['PHP_SELF'],"services.php"))
	$services='active';
else if(strpos($_SERVER['PHP_SELF'],"contact.php"))
	$contact='active';
else if(strpos($_SERVER['PHP_SELF'],"telacadastro.php"))
	$cadastro='active';?>
<div class="header">
	<div class="header_top">
		<div class="wrap">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt="" /> </a>
			</div>
			<div class="menu">
				<ul>					
					<li class=<?php echo $index?>><a href="index.php">Home</a></li>
					<li class=<?php echo $cadastro?>><a href="telacadastro.php">Cadastro</a></li>
					<li class=<?php echo $services?>><a href="services.php">Serviços</a></li>
										
					<li class=<?php echo $contact?>><a href="contact.php">Contato</a></li>
					<li class=<?php echo $about?>><a href="about.php">Sobre</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<?php 
	if(strpos($_SERVER['PHP_SELF'],"index.php")){
	    ?>
	<!--start-image-slider---->
	<div class="image-slider">
		<ul class="rslides" id="slider1">
			<li><img src="images/slider3.jpg" alt=""></li>
			<li><img src="images/slider2.jpg" alt=""></li>
			<li><img src="images/slider1.jpg" alt=""></li>
			<li><img src="images/slider4.jpg" alt=""></li>
		</ul>
	</div>
	<!--End-image-slider---->
	<?php } ?>
</div>
