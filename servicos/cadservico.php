<?php
   
    if (isset($_POST['btn'])) {
        
        if (isset($_POST['login']) && 
        !empty($_POST['login']) && 
        isset($_POST['senha']) && 
        !empty($_POST['senha'])
        ) {
            require '../config.php';
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $sql = "SELECT * FROM usuario WHERE login = :login AND senha = :senha";
            $resultado = $conn->prepare($sql);
            $resultado->bindValue("login", $login);
            $resultado->bindValue("senha", $senha);
            $resultado->execute();
        }
    }
