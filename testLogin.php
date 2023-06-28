<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))//se existir a variavel $_POST['submit'] ele vai deixar acessar o sistema.
    // email e senha não podem estar vazias.
    {
        // Acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //teste para ver se as informaçoes estão chegando
        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        //ira ver no banco de dados se existe um email igual ao cadastrado e a senha.
        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        // se a quantidade de linhas for menor que 1, quer dizer que a senha ou o email não existe no banco de dados.
        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);//atraves do unset eu consigo destruir todos esses dados.
            unset($_SESSION['senha']);
            header('Location: login.php');//senão existir ele ira permanecer na tela de login.
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');//se existir ele vai ser redirecionado para o sistema.
        }
    }
    else
    {
        ///caso não existir ele não acessa.
        header('Location: login.php');
    }
?>