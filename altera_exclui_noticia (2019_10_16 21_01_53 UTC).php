<?php  
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Portal de Notícias </title>
		<link rel="stylesheet" type="text/css" href="css/altera_exclui_noticia_estilo.css">
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

			<div id="central">

				<h1> ALTERAÇÃO/EXCLUSÃO DE NOTÍCIAS </h1>

			</div>
			
			<table id="tabela">
				<tr>
					<td>
						<?php  
						include "menu_local.php"
						?>									
					</td>
					<td id="segundotd">

						<h3> Manchete Ação </h3>
						
					</td>
				</tr>
			</table>				
		</div>
							
		

		<div class="rodape">
			<?php  
				include "rodape.php"
			?>
			
		</div>
	</body>
</html>