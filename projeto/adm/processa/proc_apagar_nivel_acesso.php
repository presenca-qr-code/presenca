<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$id 				= $_GET["id"];

$query =($conectar, "DELETE FROM nivel_acessos WHERE id=$id");
$resultado = mysqli_query($query);
$linhas = mysqli_affected_rows($resultado);

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>

	<body>
		<?php
		if (mysqli_affected_rows() != 0 ){	
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projeto/adm/administrativo.php?link=18'>
				<script type=\"text/javascript\">
					alert(\"Nivel de Acesso apagado com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/projeto/adm/administrativo.php?link=18'>
				<script type=\"text/javascript\">
					alert(\"Nivel de Acesso não foi apagado com Sucesso.\");
				</script>
			";		   

		}

		?>
	</body>
</html>