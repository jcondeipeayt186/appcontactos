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
<h1>Página Obtener datos del formulario</h1>

<?php
 echo alertaBootstrap("Aca vamos a consumir los datos ingresados en el formulario");

 if (isset($_POST["usuario"])){ //isset controla si existe el parametro utilizado con GET o POST

    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
    $lenguaje = $_POST["fav_language"];
 }

 ?>

<p>Los datos ingresados son:</p>
<ul>
<li>Usuario: <b>  <?php echo $usuario?> </b></li>
<li>la clave: <b> <?php echo $clave?> </b></li>
<li>lenguaje: <b> <?php echo $lenguaje?> </b></li>

<?php
 if (isset($_POST["vehicle"])){ //isset controla si existe el parametro utilizado con GET o POST
    $vehiculo = $_POST["vehicle"];
    if(!empty($vehiculo)){
        echo "<li>vehiculos:</li>";
        echo "<ul>";
        // Loop to store and display values of individual checked checkbox.
        foreach($vehiculo as $selected){
                echo "<li><b>". $selected ."</b></li>";
        }
        echo "</ul>";
    }
 }else echo "<p>cantidad de vehiculos: 0</p>";
?>

</ul>
 



<a href="testFormulario.php">Ir al formulario</a>

<br>

<?php piePagina() ?>

</div>
</body>
</html>