<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>mostrando nombres</title>
    </head>
    <body style="background: palegreen">
        <h1 >Hola soy  titulillo </h1>
        
        //coment /uncoment
        <hr size="4" color="blue" >
        <?php
        $h = "hola como estas amiga <br>";
        echo  $h;  
        echo "ahora si a programar se a dicho" ;
        echo '<br>';
        echo 3*3 ;
      
        ?>
          <h2>
         "mi novio bridget es muy celosilla ¿que debo hacer?"
        </h2>
       <ol>
           <li> no hacer nada con nadie;
        <li> averiguar por que te cela tanto;
        <li> dejar d ehablar con las amiguitas:
            
          <li> no hacer caso
        <li> preguntar a daniel el motivo
            </ol>
        <?php
        echo  "Nombre : ".$_POST['nombre'];
        echo "<br>";
        echo "Apellido: " .$_POST['apellido'];
        ?>
        <hr size="4" color="orange">
<!--        //#aki vaa otro ejercicio#-->
        <?php
        $booleana = true;
        echo "el valor del booleaana es : ".$booleana;
        ?>

<input type="">
    </body>
</html>
