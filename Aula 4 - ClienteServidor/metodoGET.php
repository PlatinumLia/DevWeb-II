<?php
//o método GET passa os parâmetros pela URL
//ex: http://localhost/DevWebII/Aula%205%20-%20ClienteServidor/metodoGET.php?nome=Lia&idade=18

echo "Parâmetros recebidos: <br>";

$nome = $_GET["nome"];
echo $nome . "<br>";

echo $_GET["idade"];

?>