<!-- Condicional NULL CAO -->
<?php
    $nome = 'Bruno ';
    $sobrenome = 'Ramos';


    $nomeCompleto = $nome;
    // $nomeCompleto .= isset($sobrenome) ? $sobrenome : '';
    $nomeCompleto .= $sobrenome ?? '';

    echo $nomeCompleto 
?>
