<style>

    div{
        border: 1px solid #000;
    }

    .container{
        display: grid;
        grid-template-columns: auto auto auto auto auto;
        grid-template-rows: auto auto ;
        
    }

</style>

<h2>Estrutura de repetição While</h2>
<p>
    utilizada para repetir uma sequencia de
    instruções, enquanto uma condição for 
    verdadeira.
</p>

<p>
    <pre>
        while(condição){
            //instruões de serem repetidas
        }
    </pre>
</p>
 <div class="container">
<?php
//for ($tabuada = 1; $tabuada <= 10; $tabuada++){
    $tabuada = 1;
        while($tabuada <= 10){
            echo "<div>";
    // for ($contador = 0; $contador <= 10; $contador++){ 
        $contador = 0;
        while($contador <= 10){
            echo "$tabuada x $contador = " . $contador * $tabuada . "<br>";
                $contador++;
        } 
         
    echo "</div>";
    $tabuada++;
}
                 
?>
</div>