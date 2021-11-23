<?php

// mostra o código em string
function mostrar($val)
{
    echo '<pre style="background-color: #F0F0F0">';
    print_r($val);
    echo  '</pre>';
}


// ITEM 01
$item01 = '<h2>01 Crie um array </h2>
$array = array();';
mostrar($item01);
$array = array();




// ITEM 02
$item02 = '<h2>02 - Popule este array com 7 números </h2>
$array[] = 5;
$array[] = 76;
$array[] = 27;
$array[] = 69;
$array[] = 8;
$array[] = 10;
$array[] = 3;

print_r($array);
';
mostrar($item02);
$array[] = 5;
$array[] = 76;
$array[] = 27;
$array[] = 69;
$array[] = 8;
$array[] = 10;
$array[] = 3;
print_r($array);

// ITEM 03
$item03 = '<h2>03 - Imprima o número da terceira posição do array </h2>
echo "A terceira posição é ". $array[2]';
mostrar($item03);
echo "A terceira posição é " . $array[2] . "<br>";

//04 - Crie uma variável com todos os itens do array no formato de string separado por vírgula
$item04 = '<h2>04 - Crie uma variável com todos os itens do array no formato de string separado por vírgula </h2>
$array_string = implode(",", $array);
print_r($array_string);';
mostrar($item04);
$array_string = implode(",", $array);
print_r($array_string);


//ITEM 05
$item05 = '<h2>05 - Crie um novo array a partir da variável no formato de string que foi criada e destrua o array anterior</h2>
// Criando novo array partir da variavel $array_string
$novo_array = array_map("intval", explode(",", $array_string));
// Destrindo a variavel $array
unset($array);
print_r($novo_array);';
mostrar($item05);
$novo_array = array_map("intval", explode(",", $array_string));
unset($array);
print_r($novo_array);



// ITEM 06
$item06 = '<h2>06 Crie uma condição para verificar se existe o valor 14 no array </h2>
if (in_array(14, $novo_array)) {
    echo "14 contem no array";
} else {
    echo "14 não contem no array";
}';
mostrar($item06);
if (in_array(14, $novo_array)) {
    echo "14 contem no array";
} else {
    echo "14 não contem no array";
}

// ITEM 07
$item07 = '<h2>07 Faça uma busca em cada posição. Se o número da posição atual for menor que <br> o da posição anterior (valor anterior que não foi excluído do array ainda), exclua esta posição </h2>
$anterior = 0;
foreach ($novo_array as $key => $atual) {    
    if($atual < $anterior){
        unset($novo_array[$key]);
        echo $atual . " será removido porque é menor que "  . $anterior;
    }
    $anterior = $atual;
}
print_r($novo_array);';
mostrar($item07);
$anterior = 0;
foreach ($novo_array as $key => $atual) {
    if ($atual < $anterior) {
        unset($novo_array[$key]);
        echo $atual . " será removido porque é menor que "  . $anterior . "<br>";
    }
    $anterior = $atual;
}
print_r($novo_array);


// ITEM 08
$item08 = '<h2>08 Remova a última posição deste array </h2>
array_pop($novo_array);
print_r($novo_array);';
mostrar($item08);
// removendo a ultima posição do array
array_pop($novo_array);
print_r($novo_array);


// ITEM 09
$item09 = '<h2>09 Conte quantos elementos tem neste array </h2>
echo "O array contem ". count($novo_array) ." itens";';
mostrar($item09);
echo "O array contem " . count($novo_array) . " itens";
// ITEM 10
$item10 = '<h2>10  Inverta as posições deste array</h2>
//revertendo array
$array_reverso = array_reverse($novo_array);
print_r($array_reverso);';
mostrar($item10);
$array_reverso = array_reverse($novo_array);
print_r($array_reverso);
