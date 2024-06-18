<?php
   
    if (isset($_POST['btn'])) {
        
        if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
            session_start();
            require '../config.php';
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $sql = "SELECT * FROM usuario WHERE login = :login AND senha = :senha";
            $resultado = $conn->prepare($sql);
            $resultado->bindValue("login", $login);
            $resultado->bindValue("senha", $senha);
            $resultado->execute();
            
            if($resultado->rowCount() > 0) {
                $dado = $resultado->fetch();
               
                $_SESSION['id'] = $dado['id'];

                $_SESSION['nome'] = $dado['login'];

                header('Location: ../index.php');
            } else {
                header('Location: ../login.php?entrou=nao');
            }

        }
        else {
            header('Location: ../login.php?entrou=errado');
        }
    }
                // var_dump($_POST['login']);
                // var_dump($_POST['senha']);
                // var_dump($dado);