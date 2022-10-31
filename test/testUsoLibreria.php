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
<h1>Página 1 - Prueba de uso de funciones que estan en otros archivos</h1>

<?php echo alertaBootstrap("Mensaje de la página 1") ?>

<a href="testUsoLibreria2.php">Ir a otra página</a>

<br>

<?php piePagina() ?>

</div>
</body>
</html>