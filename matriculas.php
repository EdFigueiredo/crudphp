<a class="btn btn-secondary btn-sm" href="?pagina=inserir_matricula">Inserir nova matrícula</a>
<table class="table" id="matriculas">
	<thead>
		<tr>
			<th>Nome Aluno</th>
			<th>Nome Curso</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
	<?php
		include ('conecta.php');
		while($linha = mysqli_fetch_array($consulta_matriculas)){
			echo '<tr><td>'.$linha['nome_aluno'].'</td>';
			echo '<td>'.$linha['nome_curso'].'</td>';
		?>
		<td><a class="btn btn-secondary btn-sm" href="deleta_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso']; ?>">Deletar</a></td></tr>
		<?php
		}
		?>
	</tbody>
</table>