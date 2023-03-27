<?php

    $cores = [ "yellow", "green", "blue", "pink", "red", "purple", "orange", "gray", "white" ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        foreach($cores as $key => $cor ){
            echo "<a href='atividadeaula15.php?cor=$cor'>
            Mudar cor para $cor
            </a>" . "<br>";
        }
    ?>
    <style>
        body{
            background-color: <?php echo $cor ?>;
        }
        </style>

</body>
</html>