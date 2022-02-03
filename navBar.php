<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">

        <a href="index.php" class="navbar-brand">
            <img src="assets/images/logo.png" alt="Logo Super Maxi">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center mt-4" id="navbarNav">
            
            <ul class="navbar-nav mb-4">

                <li class="nav-item">
                    <a href="index.php" class="nav-link">Add Validade</a>
                </li>

                <li class="nav-item">
                    <a href="lista_validade.php" class="nav-link">Lista Validade</a>
                </li>

                <li class="nav-item">
                    <a href="tabela_rebaixa.php" class="nav-link">Rebaixa</a>
                </li>

            </ul>
            
        </div>

    </div>

</nav>

<div class="d-flex flex-row justify-content-between align-items-center logout">
    <span class="mx-4 my-2">Usuario: <?= $_SESSION['usuario'] ?></span>
    <a href="logout.php" class="btn btn-danger mx-4 my-2">Sair</a>
</div>