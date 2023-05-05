<?php
//Funcion para comparar numeros
function compararNum($num1, $num2){
    if ($num1 > $num2)
        echo "El numero {$num1} es mayor al numero {$num2}";
    else if($num2 > $num1)
        echo "El numero {$num2} es mayor al numero {$num1}";
    else
        echo "Los numeros son iguales";
}
// Llamado de la funcion
compararNum(20,16);
echo "<br>";
//Declaracion de una variable llamada nombre
$nombre = "Kieran";
echo "{$nombre}: ";
switch($nombre){
    case "Miguel":
        echo "El es mi tio";
        break;
    case "Alicia":
        echo "Ella es mi amiga";
        break;
    case "Mr. Whiskers":
        echo "El es mi gato";
        break;
    default:
        echo "No lo conozco";
        break;
}

echo "<br>";

$match_nombre = match ($nombre){
    'Miguel' => 'El es mi tio',
    'Alicia' => 'Ella es mi amiga',
    'Mr. Whiskers' => 'El es mi gato',
    default => 'No lo conozco'
};

echo "{$match_nombre}  <- Hecho con Match";


