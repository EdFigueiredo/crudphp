<?php include('conecta.php');?>
<?php if(!isset($_GET['editar'])){?>
	<h1>Inserir Novo Curso</h1>
	<form method="post" action="processa_curso.php">
		</br>
		<label class="badge bg-light text-dark">Nome Curso</label></br></br>
		<input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso">
		</br></br>
		<label class="badge bg-light text-dark">Carga Horária</label></br></br>
		<input class="form-control" type="text" name="carga_horaria" placeholder="Insira a carga horária">
		</br></br>
		<input class="btn btn-primary" type="submit" value="Inserir Curso">
	</form>
<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_cursos)){ ?>
		<?php if($linha['id_curso'] == $_GET['editar']){ ?>
			<h1>Editar Curso</h1>
			<form method="post" action="edita_curso.php">
				<input type="hidden" name="id_curso" value="<?php echo $linha['id_curso'];?>">
				</br>
				<label class="badge bg-light text-dark">Nome Curso</label></br></br>
				<input class="form-control" type="text" name="nome_curso" placeholder="Insira o nome do curso" value="<?php echo $linha['nome_curso'];?>">
				</br></br>
				<label class="badge bg-light text-dark">Carga Horária</label></br></br>
				<input class="form-control" type="text" name="carga_horaria" placeholder="Insira a carga horaria" value="<?php echo $linha['carga_horaria'];?>">
				</br></br>
				<input class="btn btn-primary" type="submit" value="Editar Curso">
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>