<?php
	
	if ($_SESSION["perfil_user"] == "administrador") {
	
?>	
					
	<div class="lista_comlinks">			
		<ul>	
			<li><a href="administracao.php" class="active"> Administração </a></li>
			<li><a href="cadastra_user.php" class="active"> Cadastrar Usuários </a></li>
			<li><a href="altera_user.php"> Alterar Usuários </a></li>
			<li><a href="cadastro_noticia.php"> Cadastrar Notícias </a></li>
			<li><a href="altera_exclui_noticia.php"> Alterar/Excluir Notícias </a></li>
		</ul>
	</div>
<?php
	}
	elseif ($_SESSION["perfil_user"] == "operador") {
		
?>	
	<div class="lista_comlinks">	
		<ul>	
			<li><a href="administracao.php" class="active"> Administração </a></li>
			<li><a href="cadastra_user.php" class="active"> Cadastrar Usuários </a></li>
			<li><a href="altera_user.php"> Alterar Usuários </a></li>
			<li><a href="altera_exclui_noticia.php"> Alterar/Excluir Notícias </a></li>
		</ul>
	</div>
<?php
	}
	else {
?>
	<div class="lista_comlinks">	
		<ul>	
			<li><a href="administracao.php" class="active"> Administração </a></li>
			<li><a href="cadastro_noticia.php"> Cadastrar Notícias </a></li>
			<li><a href="altera_exclui_noticia.php"> Alterar Notícias</a></li>
		</ul>
	</div>	
<?php
	}
?>