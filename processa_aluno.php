<?php
include ('conecta.php');
$nome_aluno = $_POST['nome_aluno'];
$data_nascimento = $_POST['data_nascimento'];
$query = "INSERT INTO ALUNOS(nome_aluno, data_nascimento) VALUES ('$nome_aluno', '$data_nascimento')";
//temos que usar aspas na variável $data_nascimento por ser um tipo varchar.
mysqli_query($conexao, $query);

header('location:index.php?pagina=alunos');

?>
