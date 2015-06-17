<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Free Global Ideas Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport"
	content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.min.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script>
		  var contAtv =1,contInfo=1;
		    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 2500,
			        speed: 600
			      });
			});
				$(function(){
					$("#texttelefone").mask("(99)9999-9999");
					$("#textdata").mask("99/99/9999");
					
				});
				
				
			    function validaCampos(){
					//var form = 
					var nome = formcurriculum.nome.value;

					if(nome=="fabiano"){
						alert("FABIANO NA AREA!!!");
						return false;
					}else
						//post("gerarpdf.php");
						return true;
			    }

			    function comparaSenhas(){
					//var form = 
					var senha = formCadastro.senha.value;
					var confirmasenha = formCadastro.confirmasenha.value;

					if(senha != confirmasenha){
						alert("SENHAS DIFERENTES!!!");
						return false;
					}else
						return true;
			    }
			    
			    $(document).ready(function(){			    		
				     	$("#addAtv").click(function(){
					     	if(contAtv<5){
					     		$("#atividade").append("<span><label>Atividades Complementares</label></span> <span><input name='ativ[]' type='text' class='textbox'> </span>");
								if(contAtv==4)
									$("#addAtv").hide();
					     		contAtv++;
					     	}
				     	});
				     	$("#addInfo").click(function(){
					     	if(contInfo<3){
					     		$("#infor").append("<span><label>Informações Complementares</label></span> <span><input name='info[]' type='text' class='textbox'> </span>");
								if(contInfo==2)
									$("#addInfo").hide();
					     		contInfo++;
					     	}
				     	});				   
				    }); 			    
			    
		  </script>
</head>