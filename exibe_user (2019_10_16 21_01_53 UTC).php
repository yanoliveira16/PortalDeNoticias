<?php  
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Portal de Notícias </title>
		<link rel="stylesheet" type="text/css" href="css/acesso_restrito_estilo.css">
		<meta charset="utf-8">
	</head>
	<body>
		<div class="topo"> 
			<div id="topo"> 
				
				<?php  
					include "topo.php"
				?>

				<div class="menu">
				
					<ul>
						<li> Olá <?php include "valida_login.php";?></li>
						<li> <a href="logout.php" class="active"> Sair </a></li>
					</ul>

				</div>				
			</div>
		</div>

		<div class="conteudo">
			
							
		</div>

		<div class="rodape">
			<?php  
				include "rodape.php"
			?>
			
		</div>
	</body>
</html>