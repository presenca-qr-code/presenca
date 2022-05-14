<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id 				= $_POST["id"];
$materias			= $_POST["materias"];
$query = mysqli_query($conectar ,"UPDATE materias set materias ='$materias', modified = NOW() WHERE id='$id'");
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
					alert(\"A materia foi editada com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/qrcode/admin/administrativo.php?link=9'>
				<script type=\"text/javascript\">
					alert(\"A matéria não foi editado com Sucesso.\");
				</script>
			";		   

		}

		?>
	</body>
</html>