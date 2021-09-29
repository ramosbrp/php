<?php
require('./templates/header.php');





?>

<a href="./paginas/home.php">HOME</a>
<a href="./paginas/sobre.php">SOBRE</a> <br> <br>

<form action="recebedor.php" method="POST" >
    <label for="">
        Nome:
        <br>
        <input type="text" name="nome" >
    </label>

    <br><br>

    <label for="">
        Senha:
        <br>
        <input type="password" name="idade" >
    </label>
    <br>
    <br>
    <input type="submit" value="Enviar">
</form>