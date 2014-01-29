<?php

/*se conecta  a una base de  datos mysql*/
$conexion = mysql_connect("localhost","elver","1234");
/*verificar si se conecto con exito a una  base de datos myseqls**/
if (!$conexion){die('imposible conectarse'.mysql_error());}
/*selecciona la base de datos d ela conexion*/
mysql_select_db("biblioteca",$conexion);
/*hace una consulta a la base de datos*/
$consulta= mysql_query("SELECT * FROM discos");
/*los datos extraidos de la BD llena a un Array $fila*/
while ($fila = mysql_fetch_array($consulta))
 {
    /*Imprime los datos del array*/
 echo $fila['album'].$fila['autor'].$fila['nomcancion'].$fila['anio'] ;
 /*hace un salto */
 echo "<br>";
 }
/*cerrar la conexion*/
mysql_close($conexion);

?>
