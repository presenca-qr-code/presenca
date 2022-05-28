<?php
	$id = $_GET['id'];
	//Executa consulta
	$result = mysqli_query($conectar,"SELECT * FROM chamadas WHERE id = '$id' LIMIT 1");
	$resultado = mysqli_fetch_assoc($result);
?>
<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Editar Chamadas</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=23'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>
			
			<a href='processa/proc_apagar_chamadas.php?id=<?php echo $resultado['id']; ?>'><button type='button' class='btn btn-sm btn-danger'>Apagar</button></a>
		</div>
	</div>
  <div class="row">
	<div class="col-md-12">
	  <form class="form-horizontal" method="POST" action="processa/proc_edit_chamadas.php">
	  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Chamadas</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="chamadas" placeholder="Chamadas" value="<?php echo $resultado['chamadas']; ?>">
			</div>
		  </div>		  
		  
		  <input type="hidden" name="id" value="<?php echo $resultado['id']; ?>">
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Editar</button>
			</div>
		  </div>
		</form>
	</div>
	</div>
</div> <!-- /container -->

