
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





     ?>
