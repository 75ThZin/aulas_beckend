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

<h2>Estrutura de repetição</h2>
<p>
    utilizada para repetir uma sequencia de
    instruções por um número predeterminado
    de vezes.
</p>

<p>
    <pre>
        for(inicio; condição; passo){
            //instruões de serem repetidas
        }
    </pre>
</p>
 <div class="container">
<?php

for($tabuada = 1; $tabuada <= 10; $tabuada++){
    echo "<div>";
        for($contador = 0; $contador <= 10; $contador++){
            echo "$tabuada x $contador = " . $contador * $tabuada . "<br>";
        } 
         
    echo "</div>";
}
                 
?>
</div>