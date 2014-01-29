<?php
/*establece una conexion con la base de datos*/
$conexion = mysql_connect("localhost","elver","1234","biblioteca");
/*conprueva la conexion si fue exitoso*/
if (!$conexion){
    /*muestra el error al no poder conectarse con la base de datos*/
    die ("no se  ha podido conectarse".mysql_error());
}
/*selecciona la base de datos de la conexion*/
mysql_select_db("biblioteca",$conexion);
/*inserta datos a la tabla seleccionada*/
mysql_query("INSERT INTO discos (album,autor,nomcancion,anio)
    VALUES ('mesa','george cobos','LOS dedo DICEN','2012-05-06')");

/*cierra la conexion con la base de datos*/
mysql_close($conexion);
?>
