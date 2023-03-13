<h2>Exercicio 1</h2>

<p><pre>
    Crie um vetor com os nomes, usando a 
    estrutura de repetição for conforme 
    exemplo abaixo:
        
          --------- 
       0 |Murilo   | 
          --------- 
       1 |Poliana  |
          --------- 
       2 |Dalva    |
          --------- 

</p></pre>

<?php 

$nomes = ["Pedro", "Júlia", "Maria"];

for($i = 0; $i <= 2; $i++){
    echo  $nomes[$i] . "<br>";
}

?>
