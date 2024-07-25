<?php
function sumaDigitos($numero) {
  $suma = 0;
  while ($numero > 0) {
    $digito = $numero % 10;
    $suma += $digito;
    $numero = (int)($numero / 10);
  }
  return $suma;
}

echo "Ingrese un número entero: ";
$numero = readline();

$resultado = sumaDigitos($numero);
echo "La suma de los dígitos es: $resultado\n";
