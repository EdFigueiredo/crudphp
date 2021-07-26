<a href="?pagina=inserir_curso">Inserir novo curso</a>
<table style= "border:1px solid #ccc; width: 100%">
	<tr>
		<th>Nome Curso</th>
		<th>Carga Horária</th>
		<th>Deletar</th>
	</tr>
	<?php
		include ('conecta.php');
		while($linha = mysqli_fetch_array($consulta_cursos)){
			echo '<tr><td>'.$linha['nome_curso'].'</td>';
			echo '<td>'.$linha['carga_horaria'].'</td>';

		?>
		<td><a href="#">Deletar</a></td></tr>
		<?php
		}
		?>
</table>