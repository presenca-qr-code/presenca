<div class="container theme-showcase" role="main">      
  <div class="page-header">
	<h1>Criar Chamadas</h1>
  </div>
  <div class="row espaco">
		<div class="pull-right">
			<a href='administrativo.php?link=23'><button type='button' class='btn btn-sm btn-info'>Listar</button></a>				
		</div>
	</div>
	<br>
  <div class="row">
	<div class="col-md-12">
	  <form class="form-horizontal" method="POST" action="processa/proc_cad_chamadas.php">
	  

	  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Chamada</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="id_chamada" placeholder="Chamada">
			</div>
		  </div>


		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Turma</label>
			<div class="col-sm-10">
			  <select class="form-control" name="id_turma">
				  <option>Selecione</option>
				  <?php 
						$resultado =mysqli_query($conectar,"SELECT * FROM turmas");
						while($dados = mysqli_fetch_assoc($resultado)){
							?>
								<option value="<?php echo $dados["id"]; ?>"><?php echo $dados["turmas"];?></option>
							<?php
						}
					?>
				</select>
			</div>
		  </div>

		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Matéria</label>
			<div class="col-sm-10">
			  <select class="form-control" name="id_materia">
				  <option>Selecione</option>
				  <?php 
						$resultado =mysqli_query($conectar,"SELECT * FROM materias");
						while($dados = mysqli_fetch_assoc($resultado)){
							?>
								<option value="<?php echo $dados["id"]; ?>"><?php echo $dados["materias"];?></option>
							<?php
						}
					?>
				</select>
			</div>
		  </div>

		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Aulas</label>
			<div class="col-sm-10">
			  <select class="form-control" name="id_aula">
				  <option>Selecione</option>
				  <?php 
						$resultado =mysqli_query($conectar,"SELECT * FROM aulas");
						while($dados = mysqli_fetch_assoc($resultado)){
							?>
								<option value="<?php echo $dados["id"]; ?>"><?php echo $dados["aulas"];?></option>
							<?php
						}
					?>
				</select>
			</div>
		  </div>


		  
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-success">Cadastrar</button>
			</div>
		  </div>
		</form>
	</div>
	</div>
</div> <!-- /container -->

