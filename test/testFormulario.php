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
<h1>Página Formulario</h1>

<?php echo alertaBootstrap("Probando el formulario") ?>

<form action="testFormularioRespuesta.php" name="formulario1" method="POST">

<div class="form-group">
      <label for="exampleInputUsuario">Usuario</label>
      <input type="text" name="usuario" class="form-control" id="exampleInputUsuario" placeholder="usuario" required="">
    </div>

    
    <div class="form-group">
      <label for="exampleInputClave">Clave</label>
      <input type="password" name="clave" class="form-control" id="exampleInputClave" placeholder="Clave" required="">
    </div>


    <div class="form-check">
        <input class="form-check-input" type="radio" name="fav_language" id="flexRadioDefault1" value="html">
        <label class="form-check-label" for="flexRadioDefault1">HTML</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="fav_language" id="flexRadioDefault2" value="css" checked>
        <label class="form-check-label" for="flexRadioDefault2">CSS</label>
    </div>

    <br>

    <div class="form-group">
        <input type="checkbox" class="form-check-input" id="vehicle1" name="vehicle[]" value="Bike">
        <label for="vehicle1" class="form-check-label"> I have a bike</label><br>
        <input type="checkbox" class="form-check-input" id="vehicle2" name="vehicle[]" value="Car">
        <label for="vehicle2" class="form-check-label"> I have a car</label><br>
        <input type="checkbox" class="form-check-input" id="vehicle3" name="vehicle[]" value="Boat">
        <label for="vehicle3" class="form-check-label"> I have a boat</label>
    </div>

       
    <button type="submit" class="btn btn-outline-primary">Ingresar</button>

</form>

<br>

<?php piePagina() ?>

</div>
</body>
</html>