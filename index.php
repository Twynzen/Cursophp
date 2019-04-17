
    <?php
//arrrays

    $frutas = array("manzanas","banano","uvas");
  /*  echo $frutas[2];

    if ($frutas[1]=="banano") {
      echo "CORRECTO";
    }else {
      echo "INCORRECTO";
    }
*/


    $fruta2 = array("clave1"=> "manzana", "clave2"=>"uvas");
    echo "\n";
    echo $fruta2["clave2"];
    echo "\n";

//constantes
    define('constante','pi');
    echo constante;
    echo "\n";

//ciclos
$edad = 18;

if($edad == 18){
  echo "Es mayor de edad\n";
}else{
  echo "Es menor de edad\n";
}
$opc= 2;
switch ($opc) {
  case 2:
    echo "La variable es 2 \n";
    break;
  case 1:
  echo "La variable no es 2\n";
    break;

  default:
    # code...
    break;
}
echo "<br>";
//ciclo for
for ($i=0; $i < 10; $i++) {
  echo "\n variable incrementa".$i;
  echo "<br>";
}

$x = 0;
while ($x <= 10) {
echo $x;
echo "<br>";
 $x++;
}

//fechas
echo "<br>";
echo "Fecha del día de hoy: ". date('d-m-y');
echo "<br>";
echo "El día de hoy es: ". date('d');
echo "<br>";
echo "El mes actual es: ". date('M');
echo "<br>";
echo "El mes actual es: ". date('F');
echo "<br>";
echo "El numero de la semana actual es: ". date('W');
echo "<br>";
echo "El numero de día actual es: ". date('w');
echo "<br>";
echo "Cuantos días tiene el mes: ". date('t');

//Operadores Logicos
/*AND &&
OR ||
gmp_zor(a, b);*/
echo "<br>";
$var1 = 1;
$var2 = 2;
if ($var1 == 1 AND $var2 == 2 ) {
  echo "cumple la condicion";
}else {
  echo "No cumple la condicion";
}
echo "<br>";

if ($var1 == 1 Xor $var2 == 3 ) {
  echo "cumple la condicion";
}else {
  echo "No cumple la condicion";
}

//Operadores aritmeticos + * - / % **
$var_1 = 100;
$var_2 = 10;
echo "<br>";
echo $var_1 * $var_2;
echo "<br>";
echo $var_1 - $var_2;
echo "<br>";
echo $var_1 + $var_2;
echo "<br>";
echo $var_1 / $var_2;
$var_3 = 7;
$var_4 = 3;
echo "<br>";
echo $var_3 % $var_4;
echo "<br>";
echo $var_3 ** $var_4;

// operadores de comparacion
/*
== igual
=== identico
!= o <> diferente
!== No identico
< menor que
> mayor que
*/
//manejo de cadenas
$cadena = "Que MA pue";
echo strlen($cadena);
echo "<br>";
echo str_replace('p','P',$cadena);
echo "<br>";
echo strtolower($cadena);//pone la cadena en minusculas
echo "<br>";
echo strtoupper($cadena);// pone la cadena en mayusculas
echo "<br>";
echo substr($cadena,0,3);
echo "<br>";
echo substr($cadena,4,7);











     ?>
