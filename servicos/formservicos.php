<?php
require '../template/header.php' 
?>
<?php
require '../template/nav.php' 
?>

        <div class="container mt-5"> 
        <div class="row justify-content-center"> 
            <div class="col-md-6"> 
                <h2>Cadastrar Serviço</h2> 
                <form data-parsley-validate method="post" action="cadservico.php"> 
                    <div class="form-group"> 
                        <label for="nome">Nome:</label> 
                        <input type="text" class="form-control" id="nome" name="nome" required> </div> 
                        <div class="form-group"> 
                            <label for="preco">Preço:</label> 
                            <input type="number" class="form-control" id="preco" name="preco" step="0.01" required> </div> <br> 
                            <a href='servicos.php' class='btn btn-secondary ml-5'>Voltar</a> <button type="submit" name="submit" class="btn btn-dark">Enviar</button> 
                            </form> 
                        </div> 
                    </div> 
                </div> 
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
            </body> 
            <script src="../vendor/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../vendor/node_modules/parsleyjs/dist/parsley.min.js"></script>
    <script src="../vendor/node_modules/parsleyjs/dist/i18n/pt-br.js"></script>
    <link rel="stylesheet" href="../vendor/node_modules/parsleyjs/src/parsley.css">
            <?php
require '../template/footer.php' 
?>
