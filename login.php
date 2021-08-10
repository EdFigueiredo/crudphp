<?php 
include ('conecta.php');

$usuario = addslashes($_POST['usuario']);
$senha = md5($_POST['senha']);


$query = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha'";
$consulta = mysqli_query($conexao, $query);
#mysqli = numero de linhas que teve de resposta.
if(mysqli_num_rows($consulta) == 1){

    session_start();
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $usuario;
    header('location:index.php');
}
else{
    header('location:index.php?erro');
}


?>