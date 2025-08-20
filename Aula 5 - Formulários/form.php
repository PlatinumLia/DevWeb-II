<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário HTML</title>
</head>
<body>
    <h1>Formulário</h1>

    <form action="processa.php" method="post">
        <input type="text" placeholder="Informe o nome" name="nome">
        <br><br>
        <input type="number" placeholder="Informe a idade" name="idade">
        <br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>