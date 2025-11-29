<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        :root {
            --preto: #000000ff;
            --cinzaEscuro: #66666eff;
            --cinzaClaro: #9999a1ff;
            --platina: #e6e6e9ff;
            --branco: #ffffffff;
            --azulClaro: #18b4f1ff;
            --fonteTitulo: "Roboto", sans-serif;
            --fonteTexto: "Open Sans", sans-serif;
        }

        * {
            padding: 0;
            margin: 0;
        }

        body {
            background-image: url("./../../img/persona3.webp");
            color: var(--branco);
            align-items: center;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }

        form {
            font-size: large;
            background-color: var(--azulClaro);
            border: 2px solid var(--branco);
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            color: var(--branco);
            margin-left: 50px;
        }

        table {
            border: 1px solid var(--preto);
            background-color: var(--azulClaro);
            color: var(--branco);
            border-radius: 12px;
            overflow: hidden;
        }

        th {
            border: 2px solid var(--platina);
            background-color: var(--azulClaro);
            padding: 12px;
            text-align: left;
            color: var(--preto);
        }

        td {
            border: 2px solid var(--platina);
            background: var(--azulClaro);
            padding: 10px 12px;
            color: var(--preto);
        }

        img {
            width: 25px;
            height: 25px;
        }
    </style>
</head>

<body>