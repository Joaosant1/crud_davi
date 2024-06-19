<?php
        if (isset($_POST['nome']) && 
        !empty($_POST['nome']) && 
        isset($_POST['preco']) && 
        !empty($_POST['preco'])
        ) {
            require '../verify/config.php';
            $nome = $_POST['nome'];
            $preco = $_POST['preco'];
            $sql = "INSERT INTO servicos(nome,preco) VALUES(:nome,:preco)";
            $resultado = $conn->prepare($sql);
            $resultado->bindValue(":nome", $nome);
            $resultado->bindValue(":preco", $preco);
            $resultado->execute();

            header('Location: servicos.php?nome_servico=$nome&sucesso=ok');
        }
    
