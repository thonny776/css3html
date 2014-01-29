<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //goto salto hace un salto de codigo y no ejecuta el script
       // goto salto;
        echo "testo que kieorsaltar";
        $array = array("contigo","kiero","tener","una vida","feliz");
        foreach ($array as $val) {
            //echo "= $val";
            var_dump($val);
        }{
            
        }
        //goto salto ejecuta el codigo despues de salto:
       // salto:
        echo "texto q quiero mostrar";
         //salto:
             $whi=2;
        while ($whi <=10){
            //$whi ++ >> aumenta 1 en 1 hasta 10
            $whi++;
            echo "$whi<br>";
        }
        //esto captura el ulrimo valor de while
        //echo "$whi";
        
            $cal = 9;
        while ($cal>1) {
            $cal--;
            echo "Imprime $cal <br>";
            //echo count($cal);
            
        }
        //salto:
        ?>
        <?php
        $muestra= 0.1234567e2;
        
        function nada() {
            global $muestra;
            echo "Aqui muestra variable  global\n".$muestra;
            
        }
        nada();
        ?>
        
        
    </body>
</html>
