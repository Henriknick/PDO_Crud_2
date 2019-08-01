<?php
include 'Includes/Variaveis.php';
include 'Class/ClassCrud.php';
include 'Includes/Header.php';
?>

<div class="container">
    <form id="FormEnquete" name="FormEnquete" action="Controllers/ControllerEnquete.php" method="post">
        <p>Gostou do conteúdo?</p>
        <input type="radio" name="radio" value="sim" checked>Sim <br>
        <input type="radio" name="radio" value="nao">Não <br>
        <input type="submit" value="Enviar">
    </form>
</div>















<?php
include 'Includes/Footer.php';
?>

