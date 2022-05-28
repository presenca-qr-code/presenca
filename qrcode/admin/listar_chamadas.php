
<?php
	
	$resultado=mysqli_query($conectar,"select chamadas.id,chamadas.chamada as chamadas, turmas.turmas, materias.materias, aulas.aulas
										from chamadas
										inner join turmas on turmas.id = chamadas.id_turma
										inner join materias on materias.id = chamadas.id_materia
										inner join aulas on aulas.id = chamadas.id_aula");
	$linhas=mysqli_num_rows($resultado);
?>	
<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Lista Chamadas</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href="administrativo.php?link=22"><button type='button' class='btn btn-sm btn-success'>Cadastrar</button></a>
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <table class="table">
		<thead>
		  <tr>
			<th>ID</th>
			<th>Chamada</th>
			<th>Turmas</th>	
			<th>Matéria</th>	
			<th>Aula</th>				
			<th>Ações</th>
		  </tr>
		</thead>
		<tbody>
			<?php 
				while($linhas = mysqli_fetch_array($resultado)){
					echo "<tr>";
						echo "<td>".$linhas['id']."</td>";
						echo "<td>".$linhas['chamadas']."</td>";
						echo "<td>".$linhas['turmas']."</td>";
						echo "<td>".$linhas['materias']."</td>";
						echo "<td>".$linhas['aulas']."</td>";

						
						?>
						<td> 
						<a href='administrativo.php?link=23&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-primary'>Visualizar</button></a>
						
						<a href='administrativo.php?link=24&id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-warning'>Editar</button></a>
						
						<a href='processa/proc_apagar_chamadas.php?id=<?php echo $linhas['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
						
						<?php
					echo "</tr>";
				}
			?>
		</tbody>
	  </table>
	</div>
	</div>
</div> <!-- /container -->

