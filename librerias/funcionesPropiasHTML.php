<?php

function estilosBoostrap(){
?>
  <link rel="stylesheet" href="../css/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="../css/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

<!-- Iconos de bootstrap (https://icons.getbootstrap.com/) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

<?php
}

function estilosBoostrapOnline(){
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Iconos de bootstrap (https://icons.getbootstrap.com/) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
<?php
}

function getHTMLContactoAlmacenadoCorrectamente($accion_DML_SQL){
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Suscripción Completa</title>

<?php
  if(true)  echo estilosBoostrap();
  else echo "<link href='../css/estilos.css' rel='stylesheet' type='text/css'>";
?>

</head>

<body>

<div class="group">
  <form action="listado.php" method="POST">
  <h2><?php echo $accion_DML_SQL?></h2>
  <div class="justify-content-center"> <input class="form-btn" name="submit" type="submit" value="Ir al listado" /></div>
  </form>
</div>
</body>
</html>

<?php
}

function getHTML_MailExistente(){
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Suscripción Incompleta</title>
<?php
  if(false)  echo estilosBoostrap();
  else echo "<link href='../css/estilos.css' rel='stylesheet' type='text/css'>";
?>
</head>

<body>
<div class="group">
  <form action="#" method="POST">
  <h2><em>¡Suscripción Incompleta</em>!</h2>
  <p><em>La dirección de correo electrónico que usted ha proporcionado ha sido previamente registrada en nuestra base de datos.</em></p>

    <center><input class="form-btn"  onClick="window.location.href='../index.html'" name="submit" type="button" value="Atrás" /></center>

  </form>
</div>
</body>
</html>

<?php
}

function getHTML_UsuarioIncorrecto(){
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Suscripción Incompleta</title>
<link href="css/estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="group">
  <form action="#" method="POST">
  <h2><em>Usuario Incorrecto</em>!</h2>
  <p><em>No existe este usuario y clave. Si desea volver a ingresar haga clic en el botón</em></p>

    <center><input class="form-btn"  onClick="window.location.href='../index.html'" name="submit" type="button" value="Atrás" /></center>

  </form>
</div>
</body>
</html>

<?php
}

function getHTML_BarraNavegacion($usuario){
?>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" alt="logo bootstrap con enlace al sitio" target="_blank" href="https://getbootstrap.com/">
    <img src="../img/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="logo de bootstrap">
    Bootstrap
  </a>
   
   
   <span class="navbar-brand mb-0 h1"><i class="bi bi-person-circle"></i><?php echo "Usuario: ".$usuario?></span>   
  
  <a href="../index.html" role="button" class="btn btn-outline-success my-2 my-sm-0">Salir</a>
</nav>
<?php }
?>