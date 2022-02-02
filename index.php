<?php 

ini_set('display_errors', 0 );

session_start();

require_once 'assets/scripts/db_form.php';

if($_COOKIE['usuario']) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']){
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <?php include_once 'head.php'; ?>

</head>
<body>
    
<?php include_once 'navBar.php'; ?>

<main class="d-flex flex-column justify-content-center align-items-center main_height">

    <?php if($feedback): ?>
        <span class="alert alert-success" role="alert"><?= $feedback ?></span>
    <?php endif ?>
    
    <?php if($feedbackAlterar): ?>
        <span class="alert alert-primary" role="alert"><?= $feedbackAlterar ?></span>
    <?php endif ?>

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