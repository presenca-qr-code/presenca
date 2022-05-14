<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id 				= $_POST["id"];
$aulas			= $_POST["aulas"];
$query = mysqli_query($conectar ,"UPDATE aulas set aulas ='$aulas', modified = NOW() WHERE id='$id'");
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
					alert(\"A aulas foi editada com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/qrcode/admin/administrativo.php?link=13'>
				<script type=\"text/javascript\">
					alert(\"A aulas não foi editado com Sucesso.\");
				</script>
			";		   

		}

		?>
	</body>
</html>