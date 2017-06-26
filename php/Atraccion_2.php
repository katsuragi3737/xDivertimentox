<?php

mysql_connect('localhost', 'root', 'usbw') or die ('No se puede conectar con la base de datos'); 
mysql_select_db ('divertimento') or die ('No se puede seleccionar la base de datos'); 

$personas_entradas = $_POST['entrada_usuario'];
$personas_salida = $_POST['salida_usuario'];

if($personas_entradas == $personas_salida )
{
    
  $sql = "INSERT INTO operario_atraccion (Entradas,Salidas) VALUES ('$personas_entradas','$personas_salida')";
  $resultado = mysql_query ($sql);

  if (!$resultado) 
   {
    die('Error: ' . mysql_error());
   }

    else
    {
       header('Location: ../html/exito_maria.html');
    }

}
  else
  {
      header('Location: ../html/error_maria.html');
      
  }
?>