<!-- Loop For -->
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