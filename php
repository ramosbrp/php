<!-- Mesclando variáveis -->
<?php
    $cor = array(1 => 'Vermelho ', 2 => 'verde');
    echo $cor[1];
    $nome = 'Bruno ';
    $sobrenome = 'Ramos';
    $nomeCompleto = $nome.$sobrenome;
    $nomeCompleto2 = "$nome $sobrenome";
    echo $nomeCompleto;
?>

<!-- Arrays -->
<?php
    $bolo1 = ['açucar', 'farinha', 'ovo', 'leite'];
    echo "$bolo1[3] <br/>";
    echo $bolo1[2].'<br/>'
?>

<!-- Operador Array Spread (7.4) -->
<?php
    $lista1 = ['André', 'Pedro', 'João'];
    $lista2 = ['Maria', 'Talita', 'Cerafina'];

    $lista3 = [...$lista1, ...$lista2];

    print_r($lista3)
?>

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

<!-- Condicioanis IF -->
<?php
$idade = 18;

if ($idade >= 18) {
    echo 'Maior de idade';
} else if($idade <=18 && $idade >=15) {
    echo 'Já não é mais novinho';
};

// Ternário
echo ($idade >= 18) ?  'Maior de idade' :  'Menor de idade';

$menorDeIdade =  ($idade < 18) ?  true :  false;
    if($menorDeIdade) {
        echo 'Menor de idade';
    } else {
        echo 'Maior de idade';
    }

?>

<!-- Condicional NULL CAO -->
<?php
    $nome = 'Bruno ';
    $sobrenome = 'Ramos';


    $nomeCompleto = $nome;
    // $nomeCompleto .= isset($sobrenome) ? $sobrenome : '';
    $nomeCompleto .= $sobrenome ?? '';

    echo $nomeCompleto 
?>

<!-- Condicional Switch -->
<?php
    $tipo = 'texto';

    switch($tipo) {
        case 'foto':
            echo "Exibindo $tipo...";
        break;
        case 'video':
            echo "Exibindo $tipo...";
        break;
        case 'texto':
            echo "Exibindo $tipo...";
    }
?>

<!-- Loop While -->
<?php
    $numero = 0;
    
    while($numero <10) {
        $numero += 1;
        echo $numero . '<br/><br/>';
    }
?>

<!-- Loop For -->
<?php
    
    for($n = 0; $n<10; $n++) {
        echo "<h1>$n</h1>";
    }
?>

<!-- Foreach -->
<?php
$ingredientes = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó'
];

foreach ($ingredientes as $chave => $valor) {
    echo "Item " . $chave+1 . ": " . $valor . "<br/>";
}

echo '<ul>';
foreach ($ingredientes as $ingredientes) {
    echo '<li>' .$ingredientes. '</li>';
};
echo '</ul>'

?>

<!-- Exercício Prático 1 -->
<?php
    $traco = ' - ';

    for($n=0; $n<10; $n++) {
        for($n1=0; $n1<5; $n1++) {
            echo $traco;
        }
        echo "<br/>";
    };
?>

<!-- Exercício Prático 2 -->
<?php
    $traco = ' - ';  
    

        for($n1=0; $n1<20; $n1++) {
            
            for($n2=0; $n2 <= $n1; $n2++) {
                echo $traco;

            }
            echo "<br/>";
        }   


?>

<!-- Funções, Parâmetros e Includes -->
<!-- Parâmetros: Type e Valor padrão -->
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

<!-- Parâmetros: Referência ou valor -->
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

<!-- Funções anônimas -->
<?php
$dizimo = function(int $valor) {
    return $valor * 0.1;
};

$funcao = $dizimo;

echo $funcao(82);

$funcao = function(){
    ...
};

algumafuncao(10, function() {
    dklajdlaj
})


?>

<!-- Arrow function -->
<?php
$dizimo = fn($valor) => $valor * 0.1;

echo $dizimo(982);

?>

<!-- Funções recursivas -->



<!-- Formulários, validações, sessões e arquivos -->
<!-- Introdução à HTTP request -->


