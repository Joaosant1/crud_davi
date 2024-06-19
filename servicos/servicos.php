<?php
require '../template/header.php' 
?>

<?php
$sql = "SELECT * FROM servicos";
$resultado = $conn->prepare($sql);
$resultado->execute();
$servicos = $resultado->fetchALL(PDO::FETCH_ASSOC);
?>

<?php
require '../template/nav.php' 
?>
 
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <!-- <a href="../verify/logout.php" class="btn btn-danger">Sair da Conta</a> -->
    </div>
  </div>
 
  <div class="row mt-5 d-flex justify-content-center align-items-center">
    <div class="col-md-6">
      <?php
      if(isset($_GET['delete'])) {
                if($_GET['delete'] == 'ok') {
                echo '<div class="alert alert-success alert-dismissible">
                <strong>Atençao!</strong> Produto Deletado.
                <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button> 
                </div>';
                }}
                ?>
      <?php
      if(isset($_GET['sucesso'])) {
                if($_GET['sucesso'] == 'ok') {
                echo '<div class="alert alert-success alert-dismissible">
                <strong>Atençao!</strong> Serviço Cadastrado.
                <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button> 
                </div>';
                }}
                ?>
    <?php
        if(count($servicos) > 0){
        ?>
      <h2>Lista de Serviços</h2>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Serviço</th>
            <th>Preço</th>
          </tr>
        </thead>
        <tbody>
        <?php
        foreach($servicos as $servico) {
            echo "<tr>";
            echo "<td>" . $servico['id'] . "</td>" ;
            echo "<td>" . $servico['nome'] . "</td>";  
            echo "<td>" . "R$" . $servico['preco'] . "<a href='#' class='btn btn-secondary ml-5'>Editar</a></td>";
            echo "<td>
            <form method='post' action='deleteservico.php'> 
              <input type='hidden' class='form-control' name='id' value='" . $servico['nome'] . "' /> 
              <input type='hidden' class='form-control' name='id' value='" . $servico['id'] . "' /> 
              <button type='submit' name='submit' class='btn btn-danger'>Excluir</button>
            </td>";
        }   echo "</tr>"; 
               
        ?>            
        </tbody>
      </table>
      <a href='formservicos.php' class='btn btn-dark ml-5'>adcionar</a>
      <?php
        }else {
            echo '<h1>Você não tem nenhum serviço cadastrado.';
        }
      ?>
    </div>
  </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php
?>
<?php
require '../template/footer.php' 
?>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> -->
