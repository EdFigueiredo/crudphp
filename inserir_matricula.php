<h1>Inserir nova matrícula</h1>	
	<form method="post" action="processa_matricula.php">
		</br>
		<p class="badge bg-light text-dark">Selecione o Aluno</p>
		<select class="form-select" name="escolha_aluno">
			<option>Selecione um aluno</option>
			<?php
				include ('conecta.php');
				while($linha = mysqli_fetch_array($consulta_alunos)){
					echo '<option value="'.$linha['id_aluno'].'">'.$linha['nome_aluno'].'</option>';
				}
			?>
		</select>
		</br></br>
		<p class="badge bg-light text-dark">Selecione o Curso</p>
		<select class="form-select" name="escolha_curso">
			<option>Selecione um curso</option>
			<?php
				include ('conecta.php');
				while($linha = mysqli_fetch_array($consulta_cursos)){
					echo '<option value="'.$linha['id_curso'].'">'.$linha['nome_curso'].'</option>';
				}
			?>
		</select>
		</br></br>
		<input class="btn btn-primary" type="submit" value="Matricular aluno no curso">
	</form>