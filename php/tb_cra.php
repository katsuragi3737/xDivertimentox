<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Menu de navegacion fijo a pantalla</title>
	<link rel="stylesheet" href="../css/prin.css">
    
    <STYLE> 
      BODY { background: url(../Imagenes/tabla1.jpg) center fixed no-repeat} 
    </STYLE> 
    
</head>
<body>
	<header>
	  <section class="wrapper">
			<nav>
				<ul>
					<li><a href="../html/Menu.html">Inicio</a></li>
					<li><a href="../html/atraccion.html">Operario Atraccion</a></li>
					<li><a href="../html/mantenimiento.html">Operario Mantenimiento</a></li>
					<li><a href="../html/central.html">Central Receptora De Averias</a></li>
					<li><a href="#">Contacto</a></li>
				</ul>
		    </nav>
	    </section>
	</header>

<section class="contenido wrapper">
  
<center> <table border="7" cellspacing=10 cellpadding=5 style="font-size: 11pt"> </center> <tr>
<td><font face="verdana"><b>Estado</b></font></td>
<td><font face="verdana"><b>Averias</b></font></td>
<td><font face="verdana"><b>Numero Averia</b></font></td>
</tr>

<?php  
        
  $link = @mysql_connect("localhost", "root","usbw")
      or die ("Error al conectar a la base de datos.");
  @mysql_select_db("Divertimento", $link)
      or die ("Error al conectar a la base de datos.");

  $query = "Select * From cra";
  $result = mysql_query($query);
  $numero = 1;
    
  while($row = mysql_fetch_array($result))
  {
    echo "<tr><td width=\"25%\"><font face=\"verdana\">" . 
	    $row["estado"] . "</font></td>";
      
      
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["averia"] . "</font></td>";
      
      
    echo "<td width=\"25%\"><font face=\"verdana\">" .  
    $numero++;
  }
  echo "<tr><td colspan=\"20\"><font face=\"verdana\"><b>Cantidad De Averias: " . ($numero - 1) . 
      "</b></font></td></tr>";
    
  mysql_free_result($result);
  mysql_close($link);
?>
</table>
    
  
</section>
</body>
</html>