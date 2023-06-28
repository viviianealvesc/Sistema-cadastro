<?php

    if(!empty($_GET['id']))
    {
        include_once('config.php');//incluindo a conexão com o banco de dados.

        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM usuarios WHERE id=$id";// está verificando se esse id existe ou não.

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)// num_rows significa numero de linhas.
        {
            $sqlDelete = "DELETE FROM usuarios WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: sistema.php');
   
?>