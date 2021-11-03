<?php
include 'basededatos.php';

function chequearSession(){
  session_start();
  $usuario=$_SESSION["usuario"];//si retorna un valor significa que está logueado
  if ($usuario==""){
      header('location:avisoErrorLogin.html');
      exit;
   }
}

function login(){ 

    $link = conectarBD();
   

   if($_POST["usuario"]!=null){
      $usuario=$_POST["usuario"];
      $contrasena=$_POST["clave"];
      
      $resultado = 
        mysqli_query($link,
                     "SELECT * FROM usuario where nombre='".$usuario."' and contrasenia='".$contrasena."'");

   }else if($_SESSION["usuario"]!=null){
      $usuario=$_SESSION["usuario"];
      return true;
   }   
    
   print_r("Consulta usuarioooooooo:".mysqli_num_rows($resultado)>0);

if (mysqli_num_rows($resultado)>0){  //EXISTE EL USUARIO CON ESA CLAVE
    //Login correcto
    session_start();

    
   
    $row = mysqli_fetch_assoc($resultado);

    $tipoUsuario = $row["TIPO_USUARIO"];
    $datosPersona = $row["DATOS_PERSONA"];
    
    /*Guardo en la sesion los datos del usuario logueado*/
    //session_register("usuario"); // VERSION PHP < 5.4
    $_SESSION["usuario"]=$usuario;

    //session_register("tipoUsuario");// VERSION PHP < 5.4
    $_SESSION["tipoUsuario"]=$tipoUsuario;

    //session_register("datosPersona");// VERSION PHP < 5.4
    $_SESSION["datosPersona"]=$datosPersona;        
  }else{//No había ingresado y no coinciden los datos de usuario y clave
   //Login incorrecto
    session_start();
    $_SESSION = array();
    session_destroy();
    header("location:avisoErrorLogin.html");
  }
}
		
?>