<?php
session_start ();
include 'topo.php';
?>
<body>
	<?php include 'menu.php';?>
	<div class="main">
		<div class="services">
			<div class="wrap">
				<div class="error-page">

					<?php
					if (isset ( $_SESSION ["feedback"] )) {
						echo '<p>' . $_SESSION ["feedback"] . '</p>';
						unset ( $_SESSION ["feedback"] );
					}
					$linha = $_SESSION ["cadastrado"];
					foreach ( $linha as $coluna => $valor ) {
						echo $coluna . ": " . $valor . "<br/>";
					}
					
					?>

				</div>
			</div>
		</div>
	</div>
	<?php include 'rodape.php';?>
</body>
</html>

