<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>

    <?php
    function calcularMedia($notas){

       $total = array_sum($notas);
       $quantidade = count($notas);
       $media = $total / $quantidade;
       return $media;
        
    }
      

        $notasAluno = array(7,8,9);
        $mediaAluno = calcularMedia($notasAluno);
        echo "A média das notas do aluno é $mediaAluno <br>";

   
    ?>
</body>
</html>