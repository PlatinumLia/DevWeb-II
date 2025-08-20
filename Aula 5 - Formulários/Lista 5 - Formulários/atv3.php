<?php
//variável para definir o estado da requisição na página
$estadoLogin = false;

//declaração das variáveis que serão usadas para verificar o estado da requisição
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

//verifica o estado da requisição
if (isset($_POST["usuario"]) == NULL) {
    
    if ($usuario == "ifpr" && $senha == "tads") {
        $estadoLogin = true;
        echo "Bem vindo ao TADS!";
    }
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
    <?php if (!$estadoLogin): ?>
        <h2>LOGIN</h2>
        <form method="post" action="">
            <input type="text" placeholder="Usuário" name="usuario">
            <br><br>
            <input type="password" placeholder="Senha" name="senha">
            <br><br>
            <button type="submit">Login</button>
        </form>
    <?php endif; ?>
</body>

</html>