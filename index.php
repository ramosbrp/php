<?php
function somar($n1, $n2, $n3=0) {
    $total = $n1 +$n2 +$n3;
    return $total;
}

$x = somar(1, 3);
$y = somar(5, 3);
$w = somar($x, $y);

echo $w;


?>