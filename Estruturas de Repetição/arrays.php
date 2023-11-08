<?php

    $carros = ['Ferrari', "BMW", 'Mercedes'];

    $enderecoPessoas = [
        'pessoa1' => array(
            "cep" => "7364983",
            "cidade" => "Rio de Janeiro"
        ),

        'pessoa2' => array(
            "cep" => "8365428",
            "cidade" => "São Paulo"
        )
    ];

    if (isset($enderecoPessoas['pessoa1']['cidade'])){
        print_r($enderecoPessoas['pessoa1']['cidade']);
    } else {
        echo "Chave inválida!";
    }
    
?>