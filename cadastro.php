<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <style>
        .gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
    </style> -->
</head>

<body>
    <section class="vh-90 gradient-custom">
        <div class="container py-5 h-90">
            <div class="row d-flex justify-content-center align-items-center h-90">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white shadow" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                            <img src="assets/logo.jpg" style=" height: 92px ; width: 92px; border-radius: 50%;" />
                                <div class="card-text">
                                    
                                    <p class="text-white-50 mb-5">Crie sua conta!</p>   

                                    <form data-parsley-validate action="verify/cadastra.php" method="post">
                                        <div  class="form-outline form-white mb-4">
                                            <label class="form-label fw-bold" for="InputUser">Usuário</label>
                                            <input type="text" name="login" placeholder="Inserir nome de usuário" class="form-control form-control-lg" required/>
                                        </div>

                                        <div  class="form-outline form-white mb-4">
                                            <label class="form-label fw-bold" for="InputPassword">Senha</label>
                                            <input type="password" name=senha placeholder="Inserir Senha" class="form-control form-control-lg" required/>
                                        </div>

                                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit" name="btn">Criar</button>
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



