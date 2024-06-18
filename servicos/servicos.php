<?php
require '../template/header.php' 
?>

<?php
$sql = "SELECT * FROM serviços";
$resultado = $conn->prepare($sql);
$resultado->execute();
$servicos = $resultado->fetchAll(PDO::FETCH_ASSOC);
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
            echo "<td>" . "R$" . $servico['preco'] . "<a href='#' class='btn btn-secondary ml-5'>Editar</a> <a href='#' class='btn btn-danger ml-5'>Exluir</a> </td>";               
        }   echo "</tr>";        

        ?>            
        </tbody>
      </table>
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
