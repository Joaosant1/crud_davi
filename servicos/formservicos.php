<!DOCTYPE html> <html lang="en">  
<head> 
    <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Formulário com Bootstrap</title> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    </head> 
     <body> 
        <div class="container mt-5"> 
        <div class="row justify-content-center"> 
            <div class="col-md-6"> 
                <h2>Formulário</h2> 
                <form method="post" action="verify/cadastraProd.php"> 
                    <div class="form-group"> 
                        <label for="nome">Nome:</label> 
                        <input type="text" class="form-control" id="nome" name="nome" required> </div> 
                        <div class="form-group"> 
                            <label for="preco">Preço:</label> 
                            <input type="number" class="form-control" id="preco" name="preco" step="0.01" required> </div> 
                            <div class="form-group"> 
                                <label for="quantidade">Quantidade:</label> 
                                <input type="number" class="form-control" id="quantidade" name="quantidade" required> </div> 
                                <button type="submit" name="submit" class="btn btn-primary">Enviar</button> 
                            </form> 
                        </div> 
                    </div> 
                </div> 
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
            </body> 
        </html>
