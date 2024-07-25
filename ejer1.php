<?php
function esPalindromo($cadena) {
    $cadenaLimpia = preg_replace("(^a-zA-Z0-9)", "", $cadena);
  $cadenaLimpia = strtolower($cadenaLimpia);
  return $cadenaLimpia === strrev($cadenaLimpia);
}

echo "Ingrese una palabra: ";
$cadena = trim(fgets(STDIN));

if (esPalindromo($cadena)) {
  echo "La palabra '$cadena' es un palíndromo.\n";
} else {
  echo "La palabra '$cadena' no es un palíndromo.\n";
}
?>