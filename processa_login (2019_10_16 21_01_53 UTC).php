		<?php

			session_start();

			//CONEXÃO COM O BANCO DE DADOS 
			$conectar = mysqli_connect("localhost","root","","NomeDoSeuBanco");




			//RECEBIMENTO DO LOGIN E DA SENHA 
			$login=$_POST["login"];
			$senha=$_POST["senha"];




			//PESQUISA DO LOGIN , SENHA E STATUS USER
			$sql_consulta = " SELECT nome_user,
									 cod_user,
									 login_user ,
									 senha_user,
									 perfil_user
								FROM usuarios
								WHERE 
									login_user = '$login'
								AND
									senha_user ='$senha'
								AND 
									status_user = 'a'";

			$resultado_consulta = mysqli_query($conectar,$sql_consulta);

			$linhas = mysqli_num_rows($resultado_consulta);





			//DECISÃO PARA ENTRAR OU NAO NA ARES RESTRITA
			if ($linhas == 1) {

				$registro=mysqli_fetch_row($resultado_consulta);
				$_SESSION["nome_user"]= $registro[0];
				$_SESSION["cod_user"]= $registro[1];			
				$_SESSION["perfil_user"]= $registro[4];

				echo
					"<script> 
						location.href = ('administracao.php')
				 	</script>";	

			} else {

				echo
					"<script> 
						alert('Login ou Senha incorretas ! Digite novamente !')
					</script>";
				echo
					"<script> 
						location.href = ('acesso_restrito.php')
					</script>";
			}	
		?>
