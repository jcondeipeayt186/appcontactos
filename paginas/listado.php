<?php
include '../librerias/funcionesPropiasHTML.php';
include '../librerias/funcionesPropias.php';

chequearSession();

$link = conectarBD();

if (isset($_GET["ELIMINAR_CONTACTO"])){
	if($_GET["ELIMINAR_CONTACTO"]!=null){
		//Eliminar en SQL
		$deleteSQL = "DELETE FROM persona WHERE idpersona =".$_GET["ELIMINAR_CONTACTO"];//eLIMINA CONTACTO
		$resultado=mysqli_query($link, $deleteSQL);
	}
}


//Consultas en SQL
$resultado=mysqli_query($link, "SELECT * FROM persona");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Listado de contactos</title>
<?php echo estilosBoostrap(); ?>
</head>

<body>
	<?php echo getHTML_BarraNavegacion($_SESSION["usuario"]);?>
	<div class="container">

	 <h1>Listado de contactos</h1>

	<div class="alert alert-success" role="alert">
		<p>Este es un listado donde se cargan los datos consultados de la base de datos en una tabla.
		Aquí se realizan tres de las cuatro operaciones principales de la base de datos:</p> 
		<ul>
			<li>Consultar o Leer registros (SELECT) </li>
			<li>Eliminar registros (DELETE) </li>
			<li>y se encuentra el link para modificar, actualizar registros (UPDATE), acción que se realiza en formulario </li>
		</ul>
	</div>



<?php
	$cantidadRes = mysqli_num_rows($resultado);
	if($cantidadRes>0){		
		?>
		<form action="listado.php" method="POST">
		<table class="table">
			<thead>
			<tr>
				<th scope="col">Nro</th>
				<th scope="col">Cod Loc</th>
				<th scope="col">Nombre</th>							
				<th scope="col">Correo</th>
				<th scope="col">Acciones (Modificar o Eliminar)</th>
			</tr>
			</thead>
<?php						
		$indiceTabla = 1;
		echo "<tbody>";
		while($row = mysqli_fetch_assoc($resultado)){
			$nombre = $row["nombre"];
			$apellido = $row["apellido"];
			$email = $row["email"];
			$idpersona = $row["idpersona"];

			echo "<tr>";
			echo "<td scope=\"row\">".$indiceTabla."</td>";
			echo "<td>".$nombre."</td>";
			echo "<td>".$apellido."</td>";
			echo "<td>".$email."</td>";
			echo "<td>";
			echo "<a href=\"formulario.php?
				MODIFICAR_CONTACTO_id=".$idpersona."&
				MODIFICAR_CONTACTO_nombre=".$nombre."&
				MODIFICAR_CONTACTO_apellido=".$apellido."&
				MODIFICAR_CONTACTO_mail=".$email."\"/> 
			<i class=\"bi bi-pencil-square\"></i></a>";//
			echo " - ";
			echo "<a href=\"listado.php?ELIMINAR_CONTACTO=".$idpersona."\"/> 
			<i class=\"bi bi-person-x\"></i></a>";//
			echo "</td>";
			$indiceTabla++;
			echo "</tr>";
		}
		echo "</tbody>";							
	}	
?>
		</table>
		</form>

<div class="row">
	<div class="col-8"> 
  	<form action="formulario.php" method="POST">
  		<input class="btn btn-success" name="submit" type="submit" value="Volver al formulario de contacto" />
  	</form>
	</div>

	<div class="col-4"> 
		<form action="../indexLogin.html" method="POST">
				<input class="btn btn-primary" name="salir" type="submit" value="Salir" />
		</form>
  	</div>	 
</div>

 <br>
</div>

</body>
</html>

<?php
desconectarBD($link);//CIERRA LA CONEXION
?>