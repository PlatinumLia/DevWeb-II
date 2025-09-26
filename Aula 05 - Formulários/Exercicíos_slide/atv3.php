<?php
$usuario = "";
if (isset($_POST["usuario"])) {
    $usuario = $_POST['usuario'];
}

$senha = "";
if (isset($_POST['senha'])) {
    $senha = $_POST['senha'];
}

//variável para definir o estado da requisição na página
$estadoLogin = false;
if($usuario == 'ifpr' && $senha == 'tads'){
    $estadoLogin = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php if (! $estadoLogin): ?>
        <h2>LOGIN</h2>
        <form method="post" action="">
            <input type="text" placeholder="Usuário" name="usuario">
            <br><br>
            <input type="password" placeholder="Senha" name="senha">
            <br><br>
            <button type="submit">Login</button>
        </form>
        
    <?php else: ?>
        <div> 
            Bem-vindo ao TADS!
        </div>

        <a href="atv3.php">Sair</a>
    <?php endif; ?>
</body>

</html>