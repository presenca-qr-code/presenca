<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$aulas 				= $_POST["aulas"];

$query = mysqli_query($conectar,"INSERT INTO aulas (aulas, created) VALUES ('$aulas', NOW())");
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/qrcode/admin/administrativo.php?link=13'>
				<script type=\"text/javascript\">
					alert(\"Aula cadastrado com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/qrcode/admin/administrativo.php?link=13'>
				<script type=\"text/javascript\">
					alert(\"Aulas Não foi cadastrada.\");
				</script>
			";		   

		}

		?>
	</body>
</html>