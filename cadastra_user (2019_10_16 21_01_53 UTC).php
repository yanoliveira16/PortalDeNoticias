<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Portal de Notícias </title>
		<link rel="stylesheet" type="text/css" href="css/cadastra_user_estilo.css">
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
						<form method="post" action="processa_cadastra_user.php">
							<p>
								Nome <input type="text" name="nome" required>
							</p>
							<p>
								Perfil 
								<input type="radio" name="perfil" value="operador" required>
								Operador
								<input type="radio" name="perfil" value="jornalista" required>
								Jornalista
							</p>
							<p>
								Login 	<input type="text" name="login" required>
							</p>
							<p>
								Senha 	<input type="password" name="senha" required>
							</p>
							<p>
								Status 	<input type="text" name="status" required>
							</p>
							<br><br><input type="submit" value="Cadastrar Usuário">

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