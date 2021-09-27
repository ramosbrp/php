<?php
function somar($n1, $n2, &$total) {
    $total = $n1 +$n2;
    return $total;
}

$x = 3;
$y = 2;
$soma = 0;

somar($x, $y, $soma);

echo "TOTAL: ".$soma;


?>