<!DOCTYPE html>
<html>
	<head>
		<title> Portal de Notícias </title>
		<link rel="stylesheet" type="text/css" href="css/software_estilo.css">
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
						<li> <a href="index.php"> Home - Page </a></li>
						<li> <a href="hardware.php"> Hardware </a></li>
						<li> <a href="software.php"> Software </a></li>
					</ul>

				</div>
			</div>
		</div>

		<div class="conteudo">
			
			<div id="central">
				
					<h1> SOFTWARE </h1>
					<p id="negrito">
						1 Notícia Postada !!
					</p>
								
				
				
				<table>
					
					<tr>
						<td>
							<img src="imagens/botao.jpg">
						</td>
						<td id="table">
							<h2> Portal de Notícias </h1>
							<p id="negrito">
								Sistema exemplo - Portal de Notícias - Softw
							</p>
							<p >	
								Este site  exemplo apresenta um portal  de noticias com conteudos de Hardware e Software.Os usuários  que usam o sistema  são operadores , jornalistas e o administrador do sistema. 
							</p>
						</td>
					</tr>
				</table>					
			</div>
				
		</div>

		<div class="rodape">
			<?php  
				include "rodape.php"
			?>
			
		</div>
	</body>
</html>