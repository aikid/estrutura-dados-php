<?php

echo "==== Exemplo de estrutura de dados em PHP (Aray) ====\n\n";

echo "Array Simples: \n";
$names = ["Ana", "Bruno", "Carlos", "Asdrubal", "Diana"];

foreach ($names as $name) {
    echo "Nome: " . $name . "\n";
}

echo "==== X ====\n\n";
echo "Array associativo: \n";

$nameAndAge = ["Ana" => 25, "Bruno" => 18, "Carlos" => 57, "Asdrubal" => 68, "Diana" => 23];

foreach ($nameAndAge as $key => $idade) {
    echo $key . " tem " . $idade . " anos de idade \n";
}

echo "==== X ====\n\n";
echo "Array multidimensional: \n";

$matriz = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16]
];

$somaDiagonal = 0;
$somaBordas = 0;

for($i = 0; $i < count($matriz); $i++) {
    for($j = 0; $j < count($matriz[$i]); $j++) {
        echo "Elemento na posição [$i][$j]: " . $matriz[$i][$j] . "\n";
        if($i == $j) {
            $somaDiagonal = $somaDiagonal + $matriz[$i][$j];
        }
        if($i == 0 || $i == count($matriz) - 1 || $j == 0 || $j == count($matriz[$i]) - 1) {
            $somaBordas = $somaBordas + $matriz[$i][$j];
        }
    }
}

echo "Soma da diagonal principal: " . $somaDiagonal . "\n";
echo "Soma das bordas: " . $somaBordas . "\n";