<?php
/*//matriz que almacena en cada  uno 
//de sus indices nombre de las  frutas */
$frutas [1]="manzana";
$frutas [2]="pera";
$frutas [3]="platano";
$frutas [4]="mango";
$frutas [5]="papaya";
$frutas [6]="mandarina";
$frutas [7]="guanabana";
$frutas [8]="pina";
$frutas [9]="aguacate";
$frutas [10]="aguacate";
$frutas [11]="aguacate";
$frutas [12]="aguacate";
$frutas [13]="aguacate";

for ($indice=1;$indice <= count($frutas);$indice++){
    
    echo "$indice ".$frutas[$indice]."<br>";
}
//esta  muestra por el numeor de indice
echo $frutas[13];
echo "<br>";

$agenda[0]['nombre']='maycol  barcena';
$agenda[0]['telefono']='99999999';

$agenda[1]['nombre']='daniel barcena';
$agenda[1]['telefono']='888888888';

$agenda[2]['nombre']='mary-luz quincho';
$agenda[2]['telefono']='7777777777';

$agenda[3]['nombre']='eduardo quincho flores';
$agenda[3]['telefono']='66666666';

$agenda[4]['nombre']='Elver Quincho flores';
$agenda[4]['telefono']='666999666';

for($con=0;$con <= count($agenda)-1;$con++){
echo "Nombre CLiente :\n".$agenda[$con]['nombre']."<br>";
echo "Telefono CLiente :\n".$agenda[$con]['telefono']."<br><br>";
}
?>