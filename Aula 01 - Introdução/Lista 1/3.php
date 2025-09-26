<?php
$anoBissexto=0; //variável para receber os anos bissextos depois de achá-los
echo "Anos Bissextos De 1980 - 2024: " . "<br><br>";
for($anoInicial=1980; $anoInicial<=2024; $anoInicial++){
    //echo $anoInicial . "<br>";
    //$anoInicial += 1;
    
    //condições para encontrar o(s) ano(s) que seja(m) bissexto
    if(0==($anoInicial%4) && 0!=($anoInicial%100)){
        $anoBissexto = $anoInicial;
        
        if(0==($anoInicial%4) && 0==($anoInicial%400)){
        $anoBissexto = $anoInicial;
    }
        echo $anoBissexto . "<br>";
    }
}
?>