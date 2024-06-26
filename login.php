<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <section class="vh-100 gradient-custom">
       
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <?php
            if(isset($_GET['entrou'])) {
                if($_GET['entrou'] == 'nao') {
                echo '<div class="alert alert-danger alert-dismissible">
                <strong>Atençao!</strong> Usuário ou senha inválido.
                <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button> 
                </div>';
            } elseif($_GET['entrou'] == 'errado') {
                echo '<div class="alert alert-danger alert-dismissible">
                <strong>Atenção!</strong> Preencha todos os campos.
                <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="close"></button> 
                </div>';
            }
        }
        ?>
                    <div class="card bg-dark text-white shadow" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                            <img src="assets/logo.jpg" style=" height: 92px ; width: 92px; border-radius: 50%;" />
                                <div class="card-text">
                                    <h2 class="fw-bold mb-2 text-uppercase"></h2>
                                    <p class="text-white-50 mb-5">Conecte sua conta!</p>
                                    <form data-parsley-validate action="verify/logar.php" method="post">
                                        <div  class="form-outline form-white mb-4">
                                            <label class="form-label fw-bold" for="InputUser">Usuário</label>
                                            <input type="text" name="login" placeholder="Inserir nome de usuário" class="form-control form-control-lg" required/>
                                        </div>

                                        <div  class="form-outline form-white mb-4">
                                            <label class="form-label fw-bold" for="InputPassword">Senha</label>
                                            <input type="password" name=senha placeholder="Inserir Senha" class="form-control form-control-lg" required/>
                                        </div>

                                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit" name="btn">Entrar</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- validação parsley -->
    <script src="vendor/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="vendor/node_modules/parsleyjs/dist/parsley.min.js"></script>
    <script src="vendor/node_modules/parsleyjs/dist/i18n/pt-br.js"></script>
    <link rel="stylesheet" href="vendor/node_modules/parsleyjs/src/parsley.css">
</body>

</html>