<?php
echo "1. Impressão de nº de 1 a 10 com WHILE" . "<br><br>";
$n = 1;
while($n <= 10){
    echo $n . "<br>";
    $n++;
}

echo "<br><br>";

echo "2. Impressão de nº de 1 a 10 com DO-WHILE" . "<br><br>";
$n2 = 1;
do{
    echo $n2 . "<br>";
    $n2++;
}while($n2 <= 10);

echo "<br><br>";

echo "3. Impressão de nº de 1 a 10 com FOR" . "<br><br>";
for($n3 = 1; $n3 <= 10; $n3++){
    echo $n3 . "<br>";
}
?>