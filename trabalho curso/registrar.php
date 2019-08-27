<?php
    ## ARQUIVO RESPONSAVEL POR RESGATAR E REGISTRAR OS DADOS VINDO DO FORMULARIO DE CADASTRO DE PRODUTO

    /*$nome = $_POST['txtNome'];
    $quantidade = $_POST['txtQtd'];
    $preco = $_POST['txtPreco'];
    $imagem = $_POST['flImg'];*/

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = filter_input(INPUT_POST, "nome") ?? "";
        $sobrenome = filter_input(INPUT_POST, "sobrenome");
        $email = filter_input(INPUT_POST, "email");
        $endereco = filter_input(INPUT_POST, "endereco");
        $cidade = filter_input(INPUT_POST, "cidade");
    
        echo "$nome<br>$sobrenome<br>$email<br>$endereco<br>$cidade<br>";
    } else {
        # redirecionamento de página
        header('Location: cadastro.php');

    }