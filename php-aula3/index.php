<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    
    <h1>Funções</h1>
    <?php
    function soma($i, $j)
    {
        $k = $i + $j;
        return $k;
    }
    $res1 = soma(4, 5);
    echo "O resultado é da soma 1(de 4 com 5) é " . $res1."<br>";
    
    $res2 = soma(2, 3);
    echo "O resultado é da soma 2(de 2 com 3) é " . $res2."<br>";
    
    $res3 = soma(-1, -7);
    echo "O resultado é da soma 3(de -1 com -7) é " . $res3."<br>";
   
    ?>

</body>
</html>