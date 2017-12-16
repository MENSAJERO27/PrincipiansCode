<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de Multiplicar Dinámica</title>
</head>
<body>

<form action="#" method="post">
<input type="text" name="num1" >
<input type="text" name="num2" >
<input type="submit" value="Calcular">


</form>

<?php

$num1=$_POST['num1'];
$num2=$_POST['num2'];
$resultado;
$i;

for ($num1=$num1;$num1<=$num2;$num1++){
    for($i=1;$i<=10;$i++){
        $resultado=$num1 * $i;
        echo("<br>");
        echo("$num1 x $i = $resultado");
    }
}



?>
    
</body>
</html>