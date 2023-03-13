<h2>Exercicios 2</h2>
<pre>
         +---------+
    nome |maria    |
         +---------+

         +---------+
   idade |17       |
         +---------+
         
          +---------+
   altura |1.65     |
          +---------+
</pre>

<?php 
    $pessoa = [
        "nome" => "maria",
        "idade" => 17,
        "altura" => 1.65
    ];

 foreach ($pessoa as $key => $value){
    echo $value . "<br>";
 }
?>