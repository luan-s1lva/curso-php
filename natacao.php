<?php

$categorias = ['Infantil', 'Adolescente', 'Adulto'];

$nome = $_POST['nome'];
$idade = (int) $_POST['idade'];

//var_dump($idade);
if($nome == null or strlen($nome) < 3 or strlen($nome) > 11)
{
    echo 'Nome não permitido. Tente outra vez!';
    return 0;
}
else if($idade > 80 or $idade < 5)
{
    echo 'Idade não permitida';
    return 0;
}
else{
    switch($idade){
        case $idade > 5 and $idade < 13:
            echo "$nome irá competir na categoria $categorias[0]";
            break;
        case $idade > 12 and $idade < 19:
            echo "$nome irá competir na categoria $categorias[1]";
            break;
        case $idade > 18:
            echo "$nome irá competir na categoria $categorias[2]";
            break;
    }
}
?>