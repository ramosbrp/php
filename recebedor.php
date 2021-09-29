<?php
$nome = filter_input(INPUT_POST, 'nome');
$senha = filter_input(INPUT_POST, 'senha');

if($nome && $senha) {
    echo 'Nome: '.$nome.'<br/>';
    
    echo 'Senha: '.$senha;

} else {
    header("Location: index.php");
    exit;
}
