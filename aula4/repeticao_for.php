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

<?php

        for($contador = 0; $contador <= 10; $contador++){
            echo "2 x $contador = " . $contador * 2 ."<br>";
        }

?>