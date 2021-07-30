<?php include('conecta.php');?>
<?php if(!isset($_GET['editar'])){?>
	<h1>Inserir Novo Aluno</h1>
	<form method="post" action="processa_aluno.php">
		<label class="badge bg-light text-dark">Nome Aluno</label></br></br>
		<input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno">
		</br></br>
		<label class="badge bg-light text-dark">Data de Nascimento</label></br></br>
		<input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento">
		</br></br>
		<input class="btn btn-primary" type="submit" value="Inserir Aluno">
	</form>
<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_alunos)){ ?>
		<?php if($linha['id_aluno'] == $_GET['editar']){ ?>
		<h1>Editar Aluno</h1>
		<form method="post" action="edita_aluno.php">
			<input type="hidden" name="id_aluno" value="<?php echo $linha['id_aluno'];?>">																	 
			</br>
			<label class="badge bg-light text-dark">Nome Aluno</label></br></br>
			<input class="form-control" type="text" name="nome_aluno" placeholder="Insira o nome do aluno" value="<?php echo $linha['nome_aluno'];?>">
			</br></br>
			<label class="badge bg-light text-dark">Data de Nascimento</label></br></br>
			<input class="form-control" type="text" name="data_nascimento" placeholder="Insira a data de nascimento" value="<?php echo $linha['data_nascimento'];?>">
			</br></br>
			<input class="btn btn-primary" type="submit" value="Editar Aluno">
		</form>
		<?php } ?>
	<?php } ?>
<?php } ?>