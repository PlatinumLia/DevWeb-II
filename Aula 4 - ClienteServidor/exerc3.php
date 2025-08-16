<?php
//método GET
if(isset($_GET['cor'])==0){
    echo "Não foi passado parâmetro!";
}
$cor = $_GET['cor'];

echo "<body style='background-color:" . $cor . "'>";
echo "</body>";
?>