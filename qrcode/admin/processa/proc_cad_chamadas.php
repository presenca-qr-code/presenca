<?php
session_start();
include_once("../seguranca.php");
include_once("../conexao.php");
$chamada 		    = $_POST["id_chamada"];
$turma 				= $_POST["id_turma"];
$materia 			= $_POST["id_materia"];
$aula				= $_POST["id_aula"];

//var_dump($chamada);
//var_dump($turma);
//var_dump($materia);
//var_dump($aula);
//var_dump('INSERT INTO chamadas (chamada, id_turma, id_materia, id_aula, created) VALUES ("'.$chamada.'", '.$turma.', '.$materia.', '.$aula.', now())');

// $query = mysqli_query($conectar," INSERT INTO `chamadas` 
//(`id`, `chamadas`, `turmas`, `materias`, `aulas`, `created`, `modified`) VALUES
//(NULL, '12541', '1203', 'historia', '1203', '2022-05-20 00:00:00', NULL)");

   $query = mysqli_query($conectar,'INSERT INTO chamadas (chamada, id_turma, id_materia, id_aula, created) VALUES ("'.$chamada.'", '.$turma.', '.$materia.', '.$aula.', now())');


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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/qrcode/admin/administrativo.php?link=21'>
				<script type=\"text/javascript\">
					alert(\"Chamada cadastrado com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/qrcode/admin/administrativo.php?link=21'>
				<script type=\"text/javascript\">
					alert(\"Chamada Não foi cadastrada.\");
				</script>
			";		   

		}

		?>
	</body>
	
</html>