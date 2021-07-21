<?php
#mysql
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);
/*
#Criando tabelas com Php
$query = "CREATE TABLE CURSOS(id_curso int not null auto_increment,nome_curso varchar(255) not null, carga_horaria int not null, primary key(id_curso))";
$executar = mysqli_query($conexao, $query);
#Criando tabelas com Php
$query = "CREATE TABLE ALUNOS (id_aluno int not null auto_increment, nome_aluno varchar(255) not null, data_nascimento varchar(255), primary key(id_aluno))";
$executar = mysqli_query($conexao, $query);
#Criando tabelas com Php
$query = "CREATE TABLE ALUNOS_CURSOS (id_aluno_curso int not null auto_increment, id_aluno int not null, id_curso int not null, primary key(id_aluno_curso))";
$executar = mysqli_query($conexao, $query);
#Inserindo dados na tabela 
//$query = "INSERT INTO ALUNOS(nome_aluno, data_nascimento) VALUES ('Jose Gomes', '1952-01-03')";
//$executar = mysqli_query($conexao, $query);
#Inserindo dados na tabela 
$query = "INSERT INTO CURSOS(nome_curso, carga_horaria) VALUES ('Php', '40')";
$executar = mysqli_query($conexao, $query);
#matriculando alunos na tabela alunos cursos
$query = "INSERT INTO ALUNOS_CURSOS (id_aluno, id_curso) VALUES (8,1)";
$executar = mysqli_query($conexao, $query);

#Apagando dados da tabela
if(mysqli_query($conexao, "DELETE FROM CURSOS WHERE id_curso = 4")){
    echo "Apagado com sucesso!";
}else{
    echo "Falha ao apagar dados";
}

#Atualizando dados da tabela
if(mysqli_query($conexao, "UPDATE ALUNOS SET nome_aluno = 'Ed Figueiredo' WHERE id_aluno = 1")){
    echo "Atualizado!<br>";
}
if(mysqli_query($conexao, "UPDATE ALUNOS SET nome_aluno = 'Maria Moreira' WHERE id_aluno=8")){
    echo "Atualizado!<br>";
}

echo "<table border='1' margin='2'>
        <tr>
            <th>id</th>
            <th>Nome</th>
            <th>Data de nascimento</th>
        </tr>";
$consulta = mysqli_query($conexao, "SELECT * FROM ALUNOS");
while($linha = mysqli_fetch_array($consulta)){
    echo '<tr><td>'.$linha['id_aluno'].'</td><td>'.$linha['nome_aluno'].'</td><td>'.$linha['data_nascimento'].
    '</td></tr>';
}
echo '</table>';
*/
echo '<table><tr><th>Nome do Aluno</th><th>Nome do Curso</th></tr>';
$consulta = mysqli_query($conexao, "SELECT ALUNOS.nome_aluno, cursos.nome_curso FROM ALUNOS, cursos, alunos_cursos WHERE alunos_cursos.id_aluno = ALUNOS.ID_ALUNO AND alunos_cursos.id_curso = CURSOS.ID_CURSO");
while($linha = mysqli_fetch_array($consulta)){
    echo '<tr><td>'.$linha['nome_aluno'].'</td><td>'.$linha['nome_curso'].'</td></tr>';
}
echo '</table>';
?>
