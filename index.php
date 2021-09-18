<!-- Operador Array Spread (7.4) -->
<?php
    $lista1 = ['André', 'Pedro', 'João'];
    $lista2 = ['Maria', 'Talita', 'Cerafina'];

    $lista3 = [...$lista1, ...$lista2];

    print_r($lista3)
?>