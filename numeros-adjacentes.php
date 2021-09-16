<?php 

//Numeros base
$inputArray = [-1000, 4, 5, 8, 100, 50, 500];

//Variavel que irar armazenar o resultado dos cálculos
$vaz = array();

//Primeira divisão de array, dividindo o mesmo por 3
$div = array_chunk($inputArray, 3);

//Segunda divisão de array, dividindo o mesmo por 2
$div2 = array_chunk($inputArray, 2);

//Pegando quantidade de resultados dos numeros base
$qt = count($inputArray);

//Verificando se o mesmo tem uma quantidade impar
if($qt % 2 != 0){


    //Caso tenha, pegar o ultimo e penultimo valor, que vão ser ignorados pelas divisões iniciais
    $n1 = $inputArray[ count($inputArray) - 1  ];
    $n2 = $inputArray[ count($inputArray) - 2  ];

    $calc = $n1 * $n2;

    //adicionando o resultado final dentro do array vaz
    array_push($vaz, $calc);
}

//Usando a primeira divisão dentro de um foreach para separar os primeiros resultados possíveis
foreach($div as $item){
    
    if(isset($item[1]) && isset($item[2])){
        $valor1 = $item[0] * $item[1];
        $valor2 = $item[1] * $item[2];
        
        //adicionando o resultado final dentro do array vaz
        array_push($vaz, $valor1);
        array_push($vaz, $valor2);
    }

}

//Usando a segunda divisão dentro de um foreach para separar os primeiros resultados possíveis
foreach($div2 as $item){
    if(isset($item[1])){
        $valor1 = $item[0] * $item[1];

        //adicionando o resultado final dentro do array vaz
        array_push($vaz, $valor1);
    }
}

//removendo resultados repetidos do array
$vaz = array_unique($vaz);

//Exibindo o resultado final
echo max($vaz);

?>