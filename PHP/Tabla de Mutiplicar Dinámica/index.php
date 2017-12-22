<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de Multiplicar PHP</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="n1" >
        <input type="text" name="n2">
        <input type="submit" value="Calcular">
    </form>

<!-- Aquí inicia el contenido php -->
    <?php

    error_reporting(E_ERROR | E_WARNING | E_PARSE);
        $num1=$_POST['n1'];
        $num2=$_POST['n2'];
        $resultado;
        $i;
    if($num1!="" || $num2!=""){
     for($num1=$num1;$num1<=$num2;$num1++){
            for($i=1;$i<=10;$i++){
            $resultado=$num1*$i;
            echo("<br>");
            echo("$num1 x $i = $resultado");
            }
        }

     }
    ?>
    <!-- Fin del código php -->

</body>
</html>