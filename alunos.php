<a class="btn btn-secondary btn-sm" href="?pagina=inserir_aluno">Inserir novo aluno</a>
<p>
</br>
</p>
<table class="table" id="alunos">
	<thead>
		<tr>
			<th>Nome Aluno</th>
			<th>Data de Nascimento</th>
			<th>Editar</th>
			<th>Deletar</th>
			
		</tr>
	</thead>
	<tbody>
	<?php
		include ('conecta.php');
		while($linha = mysqli_fetch_array($consulta_alunos)){
			echo '<tr><td>'.$linha['nome_aluno'].'</td>';
			echo '<td>'.$linha['data_nascimento'].'</td>';
		?>
			<td><a class="btn btn-secondary btn-sm" href="?pagina=inserir_aluno&editar=<?php echo $linha['id_aluno']; ?>">Editar</a></td>
			<td><a class="btn btn-secondary btn-sm" href="deleta_aluno.php?id_aluno=<?php echo $linha['id_aluno']; ?>">Deletar</a></td></tr>
		<?php
		}
		?>
	</tbody>
</table>