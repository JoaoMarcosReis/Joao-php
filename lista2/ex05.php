<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Projeto PHP</title>
  </head>
  <body>
    <div class="container">
        <fieldset>
            <legend>Calculo de Valores</legend>   
            <form action="#" method="post">
            <div class="form-group">
                <label> Informe o valor</label>
                <input type="number" step="1" name="valor01" class="form-control">
            </div>
            <button type="subimt" class="btn btn-dark">Verificar</button>
        </fieldset>
    </div>

    <?php
        $valor01 = isset($_POST['valor01']) ? $_POST['valor01'] : 0;

        if($valor01 == 5 || $valor01 == 6 || $valor01 == 7 || $valor01 == 8 || $valor01 == 9 || $valor01 == 10 || $valor01 == 11 || $valor01 == 12 || $valor01 == 13 || $valor01 == 14 || $valor01 == 15 || $valor01 == 16 || $valor01 == 17 || $valor01 == 18 || $valor01 == 19 ||$valor01 == 20){
            Echo "número válido";
            } else{
            Echo "número inválido";
            }

    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>