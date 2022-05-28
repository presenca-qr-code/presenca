<?php
	@$id = $_GET['id'];
	//Executa consulta
	//$result = mysqli_query($conectar,"SELECT * FROM chamadas WHERE id = '$id' LIMIT 1");
	$resultado=mysqli_query($conectar,"select chamadas.id,chamadas.chamada as chamadas, turmas.turmas, materias.materias, aulas.aulas
	from chamadas
	inner join turmas on turmas.id = chamadas.id_turma
	inner join materias on materias.id = chamadas.id_materia
	inner join aulas on aulas.id = chamadas.id_aula");

	$resultado = mysqli_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">      
	<div class="page-header">
		<h1>Visualizar Chamadas</h1>
	</div>
	
	<div class="row">
		<div class="pull-right">
			<a href='administrativo.php?link=21&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>
							
			<a href='administrativo.php?link=224&id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
			
			<a href='processa/proc_apagar_chamadas.php?id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-12">
			<div class=" col-sm-3 col-md-1">
				<b>Id:</b>
			</div>
			<div class=" col-sm-9 col-md-11">
				<?php echo $resultado['id']; ?>
			</div>
			
			<div class="col-sm-3 col-md-1">
				<b>Chamada:</b>
			</div>
			<div class="col-sm-9 col-md-11">
				<?php echo $resultado['chamadas']; ?>
			</div>
		   
			<div class="col-sm-3 col-md-1">
				<b>Turmas:</b>
			</div>
			<div class="col-sm-9 col-md-11">
				<?php echo $resultado['turmas']; ?>
			</div>

			<div class="col-sm-3 col-md-1">
				<b>Matéria:</b>
			</div>
			<div class="col-sm-9 col-md-11">
				<?php echo $resultado['materias']; ?>
			</div>


			<div class="col-sm-3 col-md-1">
				<b>Aulas:</b>
			</div>
			<div class="col-sm-9 col-md-11">
				<?php echo $resultado['aulas']; ?>
			</div>
		</div>
	</div>
</div> <!-- /container -->

