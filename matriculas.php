<a href="?pagina=inserir_matricula">Inserir nova matrícula</a>
<table style= "border:1px solid #ccc; width: 100%; ">
	<tr>
		<th>Nome Aluno</th>
		<th>Nome Curso</th>
	</tr>
	<?php
		include ('conecta.php');
		while($linha = mysqli_fetch_array($consulta_matriculas)){
			echo '<tr><td>'.$linha['nome_aluno'].'</td>';
			echo '<td>'.$linha['nome_curso'].'</td></tr>';
		}?>
</table>