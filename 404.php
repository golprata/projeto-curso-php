<?php include 'topo.php';
include 'actions/Contato.php';?>
<body>
	<?php include 'menu.php';?>			
      <div class="main">
      	
      	 <?php 
      	 $obj = new Contato();
      	 var_dump($_POST);?>
    </div>
      <?php include 'rodape.php';?>
</body>
</html>

