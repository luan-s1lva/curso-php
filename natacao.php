<?php
session_start();

$categorias = ['Infantil', 'Adolescente', 'Adulto'];

$nome = $_POST['nome'];
$idade = (int) $_POST['idade'];

//var_dump($idade);
if($nome == null or strlen($nome) < 3 or strlen($nome) > 11)
{
    $_SESSION['erroNome'] = 'Nome não permitido. Tente outra vez!';
    header('location: form.php');
}
else if($idade > 80 or $idade < 5 or $idade == null)
{
    $_SESSION['erroIdade'] = 'Idade digitada não é válida. Tente outra vez';
    header('location: form.php');
}
    switch($idade){
        case $idade > 5 and $idade < 13:
            $_SESSION['sucesso'] = "$nome irá competir na categoria $categorias[0]";
            break;
        case $idade > 12 and $idade < 19:
            $_SESSION['sucesso1'] = "$nome irá competir na categoria $categorias[1]";
            break;
        case $idade > 18:
            $_SESSION['sucesso2'] = "$nome irá competir na categoria $categorias[2]";
            break;
    }

?>