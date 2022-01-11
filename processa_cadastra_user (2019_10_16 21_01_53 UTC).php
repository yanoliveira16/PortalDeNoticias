 <?php  

 	$conectar = mysqli_connect("localhost","root","","NomeDoSeuBanco");

 	$nome=$_POST["nome"];
	$perfil=$_POST["perfil"];
	$login=$_POST["login"];
 	$senha=$_POST["senha"];
    $status=$_POST["status"];

 	$sql_consulta = "SELECT login_user FROM usuarios 
 					WHERE login_user = '$login'";

 	
    $resultado_consulta = mysqli_query($conectar,$sql_consulta);

 	$linhas = mysqli_num_rows($resultado_consulta);

 	if ($linhas == 1 ) {
 		echo " <script>
 					alert('Login já cadastrado.Tente outro !!')
    		  </script>";
        echo " <script>
                    location.href = ('cadastra_user.php')
              </script>";
 	
    } else {
 		
 	
 	

 		$sql_cadastrar ="INSERT INTO usuarios
 						     (nome_user,perfil_user,login_user,senha_user,status_user)
 						 VALUES 
 						     ('$nome','$perfil','$login','$senha','$status')";

 		$resultado_cadastrar = mysqli_query($conectar,$sql_cadastrar);

 		if ($resultado_cadastrar == true) {
 			echo "<script>
 					alert('$nome cadastrado com sucesso !!')
    		  </script>";
    		echo "<script>
 					location.href=('cadastra_user.php')
    		  </script>";
 		} else {
 			echo "<script>
 					alert('Ocorreu um erro no servidor.Tente de novo ! !')
    		  </script>";

    		 echo "<script>
 					location.href('cadastra_user.php ')
    		  </script>";
 		}
    }
 	
 	

 ?>