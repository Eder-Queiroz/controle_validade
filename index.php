<?php 

ini_set('display_errors', 0 );

require_once 'assets/scripts/db_form.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Validade S.M</title>

    <!-- icon -->
    <link rel="shortcut icon" href="assets/images/cropped-imagem-32x32.png" type="image/x-icon">    

    <!-- Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/style.css">
    
    <!-- Fotns -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code&family=Roboto:wght@300;400;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">

        <a href="#" class="navbar-brand">
            <img src="assets/images/logo.png" alt="Logo Super Maxi">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center mt-4" id="navbarNav">
            
            <ul class="navbar-nav mb-4">

                <li class="nav-item">
                    <a href="#" class="nav-link">Add Validade</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">Lista Validade</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">Tabela</a>
                </li>

            </ul>
            
        </div>

    </div>

</nav>

<main class="d-flex flex-column justify-content-center align-items-center">

    <section class="container-md col-md-6">
        
        <form action="#" method="post" class="d-flex flex-column justify-content-center align-items-center">

            <div class="row">
                
                <div class="form-group col-md-6">
                    <label for="codeBar">Cod. Barra</label>
                    <input type="number" name="barCode" id="codeBar" class="form-control 
                    <?= $erros['barCode'] ? 'is-invalid' : '' ?>" placeholder="Ex: 7894904326044"
                    value="<?= $dados['barCode'] ?>">
                    <div class="invalid-feedback"><?= $erros['barCode'] ?></div>
                </div>

                <div class="form-group col-md-6">
                    <label for="unidade">Unidades</label>
                    <input type="number" name="unidade" id="unidade" class="form-control 
                    <?= $erros['unidade'] ? 'is-invalid' : '' ?>" placeholder="Ex: 10"
                    value="<?= $dados['unidade'] ?>">
                    <div class="invalid-feedback"><?= $erros['unidade'] ?></div>
                </div>

                <div class="form-group col-md-6 mt-3">
                    <label for="data">Data de Vencimento</label>
                    <input type="date" name="data" id="data" class="form-control 
                    <?= $erros['data'] ? 'is-invalid' : '' ?>" placeholder="Ex: dd/mm/aaaa"
                    value="<?= $dados['data'] ?>">
                    <div class="invalid-feedback"><?= $erros['data'] ?></div>
                </div>
                
            </div>

            <button class="btn btn-lg btn-style">Enviar</button>

        </form>

    </section>

    <!-- button modal -->
    <button type="button" class="btn btn-second mt-4" data-bs-toggle="modal" data-bs-target="#modal">
        Adicionar
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Adicionar Produto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    
                    <form action="#" method="post">
                     
                        <div class="row mb-4">

                            <div class="form-group col-md-6">
                                <label for="codeBar">Cod. Barra</label>
                                <input type="number" name="codeBar" id="codeBar" class="form-control 
                                <?= $erros['codeBar'] ? 'is-invalid' : '' ?>" placeholder="Ex: 7894904326044" value="<?= $dados['codeBar'] ?>">
                                <div class="invalid-feedback"><?= $erros['codeBar'] ?></div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" class="form-control 
                                <?= $erros['nome'] ? 'is-invalid' : '' ?>" placeholder="Ex: Pizza Calabresa" value="<?= $dados['nome'] ?>">
                                <div class="invalid-feedback"><?= $erros['nome'] ?></div>
                            </div>

                        </div>

                        <div class="row mb-4">

                            <div class="form-group col-md-6">
                                <label for="marca">Marca</label>
                                <input type="text" name="marca" id="marca" class="form-control 
                                <?= $erros['marca'] ? 'is-invalid' : '' ?>" placeholder="Ex: Seara" value="<?= $dados['marca'] ?>">
                                <div class="invalid-feedback"><?= $erros['marca'] ?></div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="peso">Peso</label>
                                <input type="text" name="peso" id="peso" class="form-control 
                                <?= $erros['peso'] ? 'is-invalid' : '' ?>" placeholder="Ex: 0,400kg" value="<?= $dados['peso'] ?>">
                                <div class="invalid-feedback"><?= $erros['peso'] ?></div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="setor">Setor</label>
                                <select name="setor" id="setor" class="form-select" value="<?= $dados['setor'] ?>">
                                    <option value="padaria">Padaria</option>
                                    <option value="mercearia">Mercearia</option>
                                </select>
                            </div>

                        </div>

                        <button class="btn btn-style">Enviar</button>

                    </form>

                </div>

            </div>
        </div>

    </div>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>