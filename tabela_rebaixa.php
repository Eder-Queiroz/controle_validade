<?php

ini_set('display_errors', 1);

?>

<!DOCTYPE html>
<html lang="pt-br">

<?php require_once 'head.php'; ?>

<body>
    
<?php require_once 'navBar.php' ?>

<main class="d-flex flex-row justify-content-center align-items-center">

        <div class="container-md col-md-6 form-tabela-rebaixa">
            <h2>Selecionar setor:</h2>

            <form action="tabela_rebaixa_setor.php" method="post" class="text-center">
                <div class="form-group">
                    <select name="setor" id="setor" class="form-select">
                        <option value="padaria">Padaria</option>
                        <option value="mercearia">Mercearia</option>
                    </select>
                    <button class="btn btn-style" name="submit_setor">Enviar</button>
                </div>
            </form>
        </div>


</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>