<?php
function ordenarArray($arreglo) {
  $n = count($arreglo);
  for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
      if ($arreglo[$j] > $arreglo[$j + 1]) {
        $temp = $arreglo[$j];
        $arreglo[$j] = $arreglo[$j + 1];
        $arreglo[$j + 1] = $temp;
      }
    }
  }
  return $arreglo;
}

echo "Ingrese el arreglo de números separados por espacios: ";
$arreglo = explode(' ', readline());

$arregloOrdenado = ordenarArray($arreglo);
print_r($arregloOrdenado);
