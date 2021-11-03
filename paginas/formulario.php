<?php // inicia bloque de codigo en php
include '../librerias/funcionesPropiasHTML.php';
include '../librerias/funcionesPropias.php';

error_log("TEST PRINT EN ARCHIVO LOG");

if (isset($_POST["usuario"])){ //isset controla si existe el parametro utilizado con GET o POST
  if($_POST["usuario"]!=null) login();
  else chequearSession();
}else chequearSession();

/* 
este comentario es de un bloque
termina bloque de codigo en php
 */
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario de Registro de Contactos - IPEAyT 186</title>
<!--
  esto es comentario en HTML
 -->

 
 <?php echo estilosBoostrap(); ?>

</head>

<body>
<?php echo getHTML_BarraNavegacion($_SESSION["usuario"]);?>

  <div class="container">
  <form action="registrarContacto.php" method="POST">
   
    <h1>Formulario de Contacto</h1>

    <div class="alert alert-success" role="alert">
		<p>En esta página se encuentra un formulario para registrar un nuevo contacto o modificar uno ya existente.
		Aquí se realizan dos de las cuatro operaciones principales de la base de datos:</p> 
		<ul>
			<li>Crear registro (INSERT) </li>			
			<li>Actualizar registros (UPDATE) </li>
		</ul>
	</div>

<?php
$nombre = "";
$apellido = "";
$mail = "";
$textoBoton = "Grabar Contacto";
$estiloBoton = "primary";

if (isset($_GET["MODIFICAR_CONTACTO_id"])){ //isset controla si existe el parametro utilizado con GET o POST
  if($_GET["MODIFICAR_CONTACTO_id"]!=null){ ?>

  
    <div class="alert alert-warning" role="alert">
      Hacer el modificar!!! Cargar los datos de la persona con id=<?php echo $_GET["MODIFICAR_CONTACTO_id"]?>
    </div>
    
    <input type="hidden" name="CONTACTO_ID" value="<?php echo $_GET["MODIFICAR_CONTACTO_id"]?>"/>
    
<?php
    $nombre =  $_GET["MODIFICAR_CONTACTO_nombre"];
    $apellido =  $_GET["MODIFICAR_CONTACTO_apellido"];
    $mail =  $_GET["MODIFICAR_CONTACTO_mail"];

    $textoBoton = "Modificar Contacto";
    $estiloBoton = "secondary";
  }
}
?>    
       
   
<!--    <div class="form-group"> -->
      <label for="exampleInputNombre">Nombre</label>
      <input type="text" name="nombre" value="<?php echo $nombre?>" class="form-control" id="exampleInputNombre" placeholder="Nombre" required="">
 <!--  </div> -->
  
      <label for="exampleInputApellido">Apellido</label>
      <input type="text" name="apellido" value="<?php echo $apellido?>" class="form-control" id="exampleInputApellido" placeholder="Apellido" required="">
   
      <label for="exampleInputEmail1">Correo Electrónico</label>
      <input type="email" name="email" value="<?php echo $mail?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ejemplo@com.ar">
      <small id="emailHelp" class="form-text text-muted">la utilizaremos para enviar notificaciones</small>
 

      <div class="row m-4">
        <div class="col-8"> 
          <button type="submit" class="btn btn-<?php echo $estiloBoton?>"><?php echo $textoBoton?></button>
        </div>
        <div class="col-4"> 
          <a href="listado.php" class="btn btn-success">Ver Listado de Contactos</a>
        </div>
      </div>
  </form>


</div>

</body>
</html>