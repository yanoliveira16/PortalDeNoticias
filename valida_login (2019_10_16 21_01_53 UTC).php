<?php
	
	if (isset($_SESSION ["nome_user"])) {
		echo $_SESSION ["nome_user"];
	
	 }else {
		
		echo "<script>
				alert('Você não está logado !!')
			</script>";
		echo "<script>
				location.href = ('acesso_restrito.php')
			</script>";
	}
	
?>