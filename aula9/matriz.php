<h2>Matriz</h2>

<?php

$produto1 = [
    "nome" => "notebook",
    "marca" => "dell",
    "preco" => "5000"
];
$produto2 = [
    "nome" => "camera",
    "marca" => "nokia",
    "preco" => "3000"
];
$produto3 = [
    "nome" => "smartphone",
    "marca" => "lg",
    "preco" => "1200"
];

$tabela = [$produto1, $produto2, $produto3];

    echo ($tabela [1]["marca"]); 


    echo "<br><br><br><br>";
    //json - JavaScript object Notation
    echo json_encode($tabela);


?>