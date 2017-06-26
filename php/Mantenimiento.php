<?php

mysql_connect('localhost', 'root', 'usbw') or die ('No se puede conectar con la base de datos'); 
mysql_select_db ('divertimento') or die ('No se puede seleccionar la base de datos'); 

$estado_op = $_POST['EO'];
$estado_atra = $_POST['EA'];

$sql = "INSERT INTO Operario_Mantenimiento (estado_op,estado_atra) VALUES ('$estado_op','$estado_atra')";
$resultado = mysql_query ($sql);

  if (!$resultado) 
   {
    die('Error: ' . mysql_error());
      
   }

    else
    {
       header('Location: ../html/exito_3.html');
    }
?>