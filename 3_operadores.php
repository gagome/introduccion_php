<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables y constantes</title>
</head>
<body>
    <h1>Variables y constantes</h1>
    <?php
//operadores aritmeticos:
    $x = 9;
    echo ("x = ".$x. "<br>");
    $y = 3;
    echo ("y = ".$y. "<br>");
    $z = 5;
    echo ("z = ".$z. "<br>");
    $suma = $x + $y;
    echo ("suma = ".$suma. "<br>");
    $resta = $x -$z;
    echo ("resta = ".$resta. "<br>");
    $multiplicacion = $suma*$resta;
    echo ("multiplicacion = ".$multiplicacion. "<br>");
    $final = $multiplicacion++;
    echo ("final= ".$final. "<br>");
    echo $multiplicacion;
    echo ("multiplicacion = ".$multiplicacion. "<br>");

    //operadores de comparación:
    $x = 5;
    $y = 4;
    echo ($x == $y);
    echo ($x <= $y);

    //operadores logicos
    $x = 4;
    $y = 5;
    if(($x==4) && ($y==5))
    {
        print("Estás en lo correcto");
    }
    echo"<br>";

    if(($x==4) or ($y==3))
    {
        print("La segunda operación también es correcta");
    }
    echo"<br>";

    //operadores de concatenación:
    $t = "Ejemplo";
    $w = 'unión';
    $x = "de";
    $y = "cadenas";
    $z = ' ';
    $resultado1 = $t;
    $resultado2 = $t.$z.$x.$z.$w.$z.$x.$z.$y;
    echo '<b><h1>';
    echo $resultado1;
    echo '<hr>';
    echo $resultado2;
    echo '</b></h1>';
    ?>
</body>