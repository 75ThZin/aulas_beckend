<h2>Vetores</h2>

<p>
    <pre>
        São estruturas de armazenamento composto heterogeneas,
        que podem ser indexadas númericamente ou textualmente.
    </pre>
</p>

<?php 
    //exemplo variável simples
        $nota = 6;
        $nota = 3;
            echo $nota . "<br>"; // . é um join - concatenado
    //exemplo vetor indexado númericamente
        $notas = [6,3]; //outra dorma de $notas = (arry)();
        $notas[] = 6;
        $notas [] = 3;
        //var_dump($notas);
        //imprimir só a primeira nota
        echo $notas[0] + $notas[1] / 2;

        //vetores com indice textual
        $notas = [];//cria um vetor vazio
        $notas["debora"] = 7;
        $notas["murilo"] = 7.8;
        $notas["poliana"] = 9;
        echo "<p></p>";
        echo "A Poliana tirou notas" . $notas["poliana"]. "<br>";
        

        //imprimindo o conteúdo de um vetor númerio.


        $valores = [2,4,8,10,12,14,16];

        for($i = 0; $i <= 6; $i++){
            echo $valores[$i] . "<br>";
        }

        //somar os valors de um vetor
        $acumulador = 0;
        for($i=0; $i<=6; $i++){
            $acumulador = $acumulador + $valores[$i];
        }

        echo "<br> A soma dos valores é $acumulador";
        
?>