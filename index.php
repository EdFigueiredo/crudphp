<?php

#Cabeçalho
include('header.php');

#conteúdo da página
if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}
else{
	$pagina = 'home';
}
if($pagina == 'cursos'){
	include('cursos.php');
}

elseif($pagina == 'alunos'){
	include('alunos.php');
}
elseif($pagina == 'inserir_curso'){
	include('inserir_curso.php');
}

elseif($pagina == 'inserir_aluno'){
	include('inserir_aluno.php');
}
elseif($pagina == 'inserir_matricula'){
	include('inserir_matricula.php');
}
elseif($pagina == 'matriculas'){
	include('matriculas.php');
}
else{
	include('home.php');
}
#rodapé
include('footer.php');

?>