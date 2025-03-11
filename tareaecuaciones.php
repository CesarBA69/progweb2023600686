<?php
function calcular_expresion_a($x, $y) {
    return (1 / $x) + (($x + $y) / 3) + (2 * ($x / $y));
}

function calcular_expresion_b($x) {
    return (( (1/2) * $x + ((3 + $x) / 2) * (2 * pow($x, 2)) ) / ((2 + 3) * $x));
}

function calcular_expresion_c($x) {
    return (sqrt(pow(2 * $x, 2) + pow(3, 2)) / 5) + pow($x, 2/2);
}

function calcular_expresion_d($x) {
    return (((1/2 + 1/4 + 1/8) * pow($x, 1/3)) / ((pow($x, 1/2) / 2) + (3 * pow($x, 2) / 4)));
}


function calcular_expresion_e($x) {
    return sqrt(((pow($x, 2) / 2) + (1 / pow($x, 1/2))) / (3 + (1/2) * pow($x, 3)));
}

$x1 = 2;
$y1 = 4;
$resultado_a = calcular_expresion_a($x1, $y1);

$x2 = 3;
$resultado_b = calcular_expresion_b($x2);

$x3 = 2;
$resultado_c = calcular_expresion_c($x3);

$x4 = 2;
$resultado_d = calcular_expresion_d($x4);

$x5 = 4;
$resultado_e = calcular_expresion_e($x5);

echo "Resultado 1 = $resultado_a <img src='imagen1.png' alt='Imagen 1' width='100' height='100'><br>";
echo "Resultado 2 = $resultado_b <img src='imagen2.png' alt='Imagen 2' width='100' height='100'><br>";
echo "Resultado 3 = $resultado_c <img src='imagen3.png' alt='Imagen 3' width='100' height='100'><br>";
echo "Resultado 4 = $resultado_d <img src='imagen4.png' alt='Imagen 4' width='100' height='100'><br>";
echo "Resultado 5 = $resultado_e <img src='imagen5.png' alt='Imagen 5' width='100' height='100'><br>";

?>