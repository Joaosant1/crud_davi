<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
  <img src="../assets/logo.jpg" width="52" height="52" class="rounded-circle" />
    <a class="navbar-brand" href=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php" style="color: #fff;" class="ms-1 d-none d-sm-inline">Menu Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../servicos/servicos.php" style="color: #fff;" class="ms-1 d-none d-sm-inline">Serviços</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: #fff;" class="ms-1 d-none d-sm-inline">Agendamentos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #fff;" class="ms-1 d-none d-sm-inline">
            <?php echo $_SESSION['nome'] ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="../verify/logout.php">Sair da conta</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>   
</body>