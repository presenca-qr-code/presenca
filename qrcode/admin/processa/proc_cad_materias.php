<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$materias 				= $_POST["materias"];

$query = mysqli_query($conectar,"INSERT INTO materias (materias, created) VALUES ('$materias', NOW())");
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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/qrcode/admin/administrativo.php?link=9'>
				<script type=\"text/javascript\">
					alert(\"Matéria cadastrado com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/qrcode/admin/administrativo.php?link=9'>
				<script type=\"text/javascript\">
					alert(\"Materia cadastrado com Sucesso.\");
				</script>
			";		   

		}

		?>
	</body>
</html>