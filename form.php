<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO PARA INSCRIÇÃO DOS COMPETIDORES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class='container'>
    <h1 class='jumbotron text-center'>FORMULÁRIO DE INSCRIÇÃO</h1>

    <form action="natacao.php" method="POST">
        <?php
            $erroNome = isset($_SESSION['erroNome']) ? $_SESSION['erroNome'] : '';
            $erroIdade = isset($_SESSION['erroIdade']) ? $_SESSION['erroIdade'] : '';
            $num = isset($_SESSION['num']) ? $_SESSION['num'] : '';

            if(!empty($erroNome))
            {
                echo $erroNome;
            }
            else if(!empty($num))
            {
                echo $num;
            }
            else if(!empty($erroIdade))
            {
                echo $erroIdade;
            }
        ?>
        
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="nome">
            <label for="floatingInput">Name</label>
        </div>

        <div class="form-floating">
            <input type="text" class="form-control" id="floatingPassword" name="idade">
            <label for="floatingPassword">Age</label>
        </div>
        
        <br>

        <button type="submit">ENVIAR</button>
    </form>
</div>
</body>
</html>