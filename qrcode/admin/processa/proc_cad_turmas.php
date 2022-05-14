<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$turmas 				= $_POST["turmas"];

$query = mysqli_query($conectar,"INSERT INTO turmas (turmas, created) VALUES ('$turmas', NOW())");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>

	<body>
		<?php
		if (mysqli_affected_rows($conectar) != 0 ){	
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/qrcode/admin/administrativo.php?link=17'>
				<script type=\"text/javascript\">
					alert(\"Turmas cadastrado com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/qrcode/admin/administrativo.php?link=17'>
				<script type=\"text/javascript\">
					alert(\"Turmas Não foi cadastrada.\");
				</script>
			";		   

		}

		?>
	</body>
</html>