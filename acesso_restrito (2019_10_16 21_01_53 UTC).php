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
			</div>
		</div>

		<div class="conteudo">
			
			<h1> ACESSO A ÁREA RESTRITA  </h1>				
			
			<form class="login" method="post" action="processa_login.php">

				<h1>
					Login 
				</h1>
				<input type="text" name="login" placeholder="Username" required>
				
				<input type="password" name="senha" placeholder="Password"  required>
				
				<p><input type="submit" value="Entrar"></p>
			
			</form>	

		</div>

		<div class="rodape">
			<?php  
				include "rodape.php"
			?>
			
		</div>
	</body>
</html>