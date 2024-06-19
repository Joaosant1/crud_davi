<?php
    if(isset($_POST['id'])){
        require '../verify/config.php';
        $nome = $_POST['nome'];
        $id = $_POST['id'];

        $sql = "DELETE FROM servicos WHERE id = :id";
        $resultado = $conn->prepare($sql);
        $resultado->bindValue(":id", $id);
        $resultado->execute();
        
        header ('Location: servicos.php?nome_produto=$nome&delete=ok');
    }
?>