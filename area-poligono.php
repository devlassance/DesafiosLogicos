<?php 

# Obs: Pesquisando mais tarde sobre esse desafio descobri que existe uma formula que retorna o mesmo resultado
# n²+(n-1)² retorna o mesmo valor. Porém achei interessante a lógica que usei para chegar no mesmo resultado.
# Por esse motivo não adaptei minha lógica de forma diferente. 

//Definindo um array vazio
$array = array();

//valor de area do poligono
$n = 3;

$n1 = $n - 1;

//definindo valor da area do meio do poligono
$meio = $n + $n1;

$val = $meio - 1;

//definindo valor individual de cada lado do poligono
while($val > 1){
    $val = $val - 1;
    array_push($array, $val);
    $val = $val - 1;

}
$lados = array_sum($array);
//Chegando no valor final dos lados
$lados = $lados * 2;
//Somando ao valor do meio para chegar ao resultado final
$result = $lados + $meio;
echo $result;
?>