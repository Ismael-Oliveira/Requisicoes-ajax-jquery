<?php
    $obj  = $_GET;
    $nome = $_GET['nome'];
    $senha = $_GET['senha'];

    if($nome == "admin" && $senha=="admin"){
        $obj['num_caract'] = strlen($nome);
        // var_dump($obj);
        $obj['status'] = "OK";
    }

    echo json_encode($obj);

   
