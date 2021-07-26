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
switch($pagina){
	case 'cursos':
	include('cursos.php');
	break;
	
	case 'alunos':
	include('alunos.php');
	break;
	
	case 'matriculas':
	include('matriculas.php');
	break;
	
	case 'inserir_curso':
	include('inserir_curso.php');
	break;
	
	case 'inserir_aluno':
	include('inserir_aluno.php');
	break;
	
	case 'inserir_matricula':
	include('inserir_matricula.php');
	break;
	
	default:
	include('home.php');
}
#rodapé
include('footer.php');

?>