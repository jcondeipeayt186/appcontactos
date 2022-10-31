<?php
include 'librerias/funcionesHTML.php';//digo que puedo usar lo que se encuentre en ese archivo
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">    

<?php linksBootstrap() ?> <!-- hago uso de la función que está definida en funcionesHTML.php -->

    <title>Prueba de uso de funciones</title>
</head>
<body>
<div class="container-fluid">

<h1>Pagina 2 - Prueba de uso de funciones que estan en otros archivos</h1>

<?php echo alertaBootstrap("Mensaje de la página 2") ?>

<a href="testUsoLibreria.php">Ir a la página inicial</a>

<br>

<?php piePagina() ?>

</div>
</body>
</html>