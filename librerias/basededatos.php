<?php

function conectarBD(){
  /*DATOS A CONFIGURAR. PROPIOS DE LA BASE DE DATOS A UTILIZAR*/
  $db_host="localhost";//localhost (si es local), NUMERO_IP O NOMBRE_SERVIDOR_PUBLICO (si es remoto)
  $db_user="root";//USUARIO DE LA BD
  $db_password="";//CLAVE DEL USUARIO evelios*131
  $db_name="contactos";//NOMBRE DE LA BD
  $db_table_name="persona";//NOMBRE DE UNA TABLA

  //Se conecta a la base de datos
  $link = mysqli_connect($db_host, $db_user, $db_password,$db_name);

  /* comprobar la conexión */
  if (mysqli_connect_errno()) {
      printf("Falló la conexión: %s\n", mysqli_connect_error());
      exit();
  }

  return $link;
}


function desconectarBD($conexion){
  mysqli_close($conexion);//CIERRA LA CONEXION
}

?>