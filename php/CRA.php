<?php

mysql_connect('localhost', 'root', 'usbw') or die ('No se puede conectar con la base de datos'); 
mysql_select_db ('divertimento') or die ('No se puede seleccionar la base de datos'); 

$reportar = $_POST['reportar'];
$averia = $_POST['averia'];

$sql = "INSERT INTO cra (estado,averia) VALUES ('$reportar','$averia')";
$resultado = mysql_query ($sql);



  if (!$resultado) 
   {
    die('Error: ' . mysql_error());
      
   }

    else
    {
       header('Location: ../html/exito_2.html');
    }
?>