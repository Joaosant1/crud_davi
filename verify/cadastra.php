<?php
   
    if (isset($_POST['btn'])) {
        
        if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
            session_start();
            require '../config.php';
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $sql = "INSERT INTO usuario (login,senha) VALUES(:login,:senha)";
            $resultado = $conn->prepare($sql);
            $resultado->bindValue("login", $login);
            $resultado->bindValue("senha", $senha);
            $resultado->execute();
            header('Location: ../login.php?succes=ok');

        }
    }
                // var_dump($_POST['login']);
                // var_dump($_POST['senha']);
                // var_dump($dado);