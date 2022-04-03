<?php
session_start();

$categorias = ['Infantil', 'Adolescente', 'Adulto'];

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($idade);
if($nome == null or strlen($nome) < 3)
{
    $_SESSION['erroNome'] = 'Nome não pode ser vazio ou menor que o permitido';
    header('location:logout.php');
}
else if(strlen($nome) > 11)
{
    $_SESSION['erroNome'] = 'Nome maior ao permitido. Tente outra vez!';
    header('location:logout.php');
}
else if(!is_numeric($idade))
{
    $_SESSION['num'] = 'DIGITE UM NÚMERO';
    header('location:logout.php');
}
else if(is_numeric($idade))
{
    
    if($idade < 5 or $idade > 80)
    {
        $_SESSION['erroIdade'] = 'Idade digitada não é válida. Tente outra vez';
        header('location:logout.php');
    }
    
    switch($idade){
        case $idade > 5 and $idade < 13:
            echo $nome .' irá competir na categoria categoria '. $categorias[0];
            break;
        case $idade > 12 and $idade < 19:
            echo $nome .' irá competir na categoria categoria '. $categorias[1];
            break;
        case $idade > 18:
            echo $nome .' irá competir na categoria categoria '. $categorias[2];
            break;
    }
}
?>