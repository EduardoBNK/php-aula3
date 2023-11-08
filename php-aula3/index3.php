<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php

    function  calcularAreaRetangulo($largura , $altura){

        $result = $largura * $altura;
        return $result;
    }

    function perimetro($largura, $altura, $largura2, $altura2){

        $result2 = $largura + $altura + $largura2 + $altura2 ;
        return $result2;
    }

    $res1 = calcularAreaRetangulo (4, 5);
    echo "O resultado do retangulo(de 4 com 5) é " . $res1."<br>";

    $res1 = perimetro (4, 5, 4, 5);
    echo "O resultado do retangulo(de 4 com 5) é " . $res1."<br>";
    ?>

</body>
</html>