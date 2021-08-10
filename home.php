
<?php if(isset($_GET['erro'])){?>
<div class="alert alert-danger" role="alert">
  Usuário e/ou senha inválido
</div>
<?php } ?>

<h1 style="text-align:center">Bem-vindo a PHP cursos</h1>
<form method="post" action="login.php">
    <label class="badge bg-light text-dark">Usuário</label></br></br>
    <input type="text" name="usuario" placeholder="Digite o usuário" class="form-control"><br>
    <label class="badge bg-light text-dark" >Senha</label></br></br>
    <input type="password" name="senha" placeholder="Digite a senha" class="form-control"></br>
    <input type="submit" value="Entrar" class="btn btn-primary">
</form>