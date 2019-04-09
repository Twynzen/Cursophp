
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
    echo $fruta2["clave2"];

//constantes
    define('constante','pi');
    echo constante;

//ciclos 
$edad = 18;

if($edad == 18){
  echo "Es mayor de edad";
}else{
  echo "Es menor de edad";
}

     ?>
