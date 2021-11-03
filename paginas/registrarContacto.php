<?php
include '../librerias/funcionesPropiasHTML.php';
include '../librerias/basededatos.php';

/*Obtiene los datos ingresados en la página anterior*/

$nombreIngresado = $_POST['nombre'];
$apellidoIngresado = $_POST['apellido'];
$emailIngresado = $_POST['email'];

$link = conectarBD();

if (isset($_POST["CONTACTO_ID"])){ //isset controla si existe el parametro utilizado con GET o POST
	if($_POST["CONTACTO_ID"]!=null){
		$idContactoModificar = $_POST['CONTACTO_ID'];

		// se genera el SQL para insertar un registro

		$update_value = "UPDATE `contactos`.`persona` SET `Nombre`= '" . $nombreIngresado . "', `Apellido`= '" . $apellidoIngresado . "',`Email` = '". $emailIngresado ."' WHERE `idpersona` = '".$idContactoModificar."'";

		//echo $update_value;

		$retry_value = mysqli_query($link, $update_value);//INSERTA REGISTRO

		if (!$retry_value) {//si hubo algún error en la consulta
			die('Error: ' . mysqli_error($link));//se muestra el error
		}	
		echo getHTMLContactoAlmacenadoCorrectamente("Modificado correctamente");//Se cargó bien la persona
	} 
	
}else{
	$resultado=mysqli_query($link, "SELECT * FROM persona WHERE Email = '".$emailIngresado."'");

	//Si ya hay una persona con ese mail, entonces invoca a la función failHTML()
	if (mysqli_num_rows($resultado)>0){
		echo getHTML_MailExistente();
	}else{
		// se genera el SQL para insertar un registro
		$insert_value = 'INSERT INTO `contactos`.`persona` (`Nombre` , `Apellido` , `Email`) VALUES 
						("' . $nombreIngresado . '", "' . $apellidoIngresado . '", "' . $emailIngresado . '")';
	
		$retry_value = mysqli_query($link, $insert_value);//INSERTA REGISTRO
	
		if (!$retry_value) {//si hubo algún error en la consulta
			   die('Error: ' . mysqli_error($link));//se muestra el error
		}	
		echo getHTMLContactoAlmacenadoCorrectamente("Almacenado correctamente");//Se cargó bien la persona
	}
}

desconectarBD($link);//CIERRA LA CONEXION
?>