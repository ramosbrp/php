<!-- Condicionais e Loops -->
<!-- Exercício Prático (Variáveis) -->
<?php
    $lista = [
        'nome' => 'Bruno',
        'idade' => 90,
        'atributos' => [
            'forca' => 60,
            'agilidade' => 80,
            'destreza' => 50
        ],
        "vida" => 1000,
        "mana" => 928
    ];

    echo "NOME: ".$lista['nome']."<br/>";
    echo "FORÇA: ".$lista['atributos']['forca']."<br/>";
    echo "VIDA: ".$lista['vida']


?>