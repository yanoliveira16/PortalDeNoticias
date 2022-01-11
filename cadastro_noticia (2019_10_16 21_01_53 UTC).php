<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Portal de Notícias </title>
		<link rel="stylesheet" type="text/css" href="css/cadastra_noticia_estilo.css">
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
				<h1> CADASTRO DE USUÁRIOS </h1>
			</div>
			
			<table id="tabela">
				<tr>
					<td>
						<?php  
							include "menu_local.php"
						?>										
					</td>
					<td>
						<form method="post" action="">
							<p>
								Manchete <input type="text" name="manchete">
							</p>
							<p>
								Resumo <input type="text" name="resumo">
							</p>
							<p>
								Texto <input type="text" name="text">
							</p>
							<p>
								Categoria
								<select type="text" name="categoria">
									<option value="hardware"> Hardware </option>
									<option value="software"> Software </option>
								</select>
							</p>
							
							<br><br><input type="submit" value="Cadastrar Notícia">

						</form>			
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