<?php
//$db_connection = mysql_connect($db_host, $db_user, $db_password);

mysql_connect('localhost', 'root', 'usbw') or die ('No se puede conectar con la base de datos'); 
mysql_select_db ('divertimento') or die ('No se puede seleccionar la base de datos'); 

$usuario = $_POST['usuario'];
$contra = $_POST['contra'];


    if($usuario == "Jerry_Cano")
    {
        
      header('Location: ../html/Success.html'); 
    }


    
    if($usuario == "Maria_Calero")
    {
        header('Location: ../html/atraccion_2.html'); 
              
    }

    
    if($usuario == "Helmut_Colin")
    {
        
      header('Location: ../html/mantenimiento_2.html'); 
        
    }

?>