<h2>Ordenação - Orden Alfabética</h2>

<?php

$nomes = ["Murilo", "Poliana", "Dalva", "Lavinia", "Camila", "kaua"];

for($c=0; $c <= 4; $c++){

    for($i = $c + 1; $i<= 5; $i++){
        if($nomes[$c] > $nomes[$i]){
            $celBranco = $nomes[$i];
            $nomes[$i] = $nomes[$c];
            $nomes[$c] = $celBranco;
        }
    }
}
var_dump($nomes);

?>