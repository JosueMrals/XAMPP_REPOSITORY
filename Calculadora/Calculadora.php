<?php
$a = $_POST["n1"];
$b = $_POST["n2"];
$opc = $_POST["accion"];

if($opc == 1){
    echo "La suma de " . $a . " + " . $b . " es : " . ($a + $b);
} else if ($opc == 2) {
    echo "La resta de " . $a . " - " . $b . " es : " . ($a - $b);
} else if ($opc == 3) {
    echo "La multiplicacion de " . $a . " x " . $b . " es : " . ($a * $b);
} else {
    echo "La divicion de " . $a . " entre " . $b . " es : " . ($a / $b);
}

?>