<?php
function generarFibonacci($n) {
  if ($n <= 1) {
    return $n;
  } else {
    return generarFibonacci($n-1) + generarFibonacci($n-2);
  }
}

function obtenerSecuenciaFibonacci($n) {
  $secuencia = array();
  for ($i = 0; $i <= $n; $i++) {
    $secuencia[] = generarFibonacci($i);
  }
  return $secuencia;
}

echo "Ingrese el número de términos de la secuencia de Fibonacci: ";
$n = readline();

$secuencia = obtenerSecuenciaFibonacci($n);
print_r($secuencia);
