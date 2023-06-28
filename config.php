<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario_viviane';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

      //serve para ver se a conexão foi efetuada com sucesso
    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>