<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<h1 >Funções</h1>
    <?php
    function multiplicacao($i, $j)
    {
        $k = $i * $j;
        return $k;
    }
    $res1 = multiplicacao(4, 5);
    echo "O resultado da multiplicacao 1(de 4 com 5) é " . $res1."<br>";
    
    $res2 = multiplicacao(2, 3);
    echo "O resultado da multiplicacao(de 2 com 3) é " . $res2."<br>";
    
    $res3 = multiplicacao(-1, -7);
    echo "O resultado da multiplicacao(de -1 com -7) é " . $res3."<br>";
    
    ?>
</body>
</html>