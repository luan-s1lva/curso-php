<?php

$categorias = ['Infantil', 'Adolescente', 'Adulto'];

$nome = 'Luan';
$idade = 22;

//var_dump($nome);
//var_dump($idade);

switch($idade){
    case $idade > 5 and $idade < 13:
        echo "$nome irá competir na categoria $categorias[0]";
        break;
    case $idade > 12 and $idade < 19:
        echo "$nome irá competir na categoria $categorias[1]";
        break;
    case $idade > 18:
        echo "$nome irá competir na categoria $categorias[2]";
}
?>