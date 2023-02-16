<h2>Estrutura de condição</h2>
<hr>
<p>
<pre>
    A Estrutura de condição é utilizada
    para avaliar qual instrução deve ser
    executada, dada uma condição.

    Se a condição for verdadeira executa a 
    instrução 1, caso contrário executa a
    instrução 2.
</pre>
</p>

<strong>Exemplo 1</strong>
<pre>
    If (<em>condicao</em>){
        //instrução 1
    }else{
        //instrução 2
    }
</pre>

<?php
/*PARA passar de ano é necessário tirar no 
minimo 6 pontos em cada disciplina.Murilo
tirou .... Ele foi aprovado ou não?
*/

$nota_do_murilo = 10;
$faltas = 0;
if($nota_do_murilo >=6 && $faltas < 75){
    echo "Murilo foi aprovado !";
}else{
    echo "Murilo foi reprovado !";
}

?>

<strong>Exemplo 2</strong>
<p>
    <pre>
    O aluno para ser aprovado precisa obter 
    nota superior a 6 pontos, para fazer exame final 
    precisar ter tirado menos que 6 pontos e mais que 3 pontos.
    Notas menores que 3 são reprovações diretas.</pre>
</p>

<?php
    $nota = 6;

    if($nota >= 6){
        echo "Aprovado";
    }else if($nota > 3){
        echo "Faz exame final";
    }else {
        echo "Reprovado";
    }
?>