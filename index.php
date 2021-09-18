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