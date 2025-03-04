<?php
$n1 = 0;
$n2 = 1;
$count = 0;

echo "$n1, $n2";

while ($count < 2046) { // 2046 porque ya imprimimos los dos primeros
    $n3 = $n1 + $n2;
    echo ", $n3";
    $n1 = $n2;
    $n2 = $n3;
    $count++;
}
?>
