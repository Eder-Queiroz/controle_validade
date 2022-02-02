<?php

ini_set('display_errors', 1);

?>

<!DOCTYPE html>
<html lang="pt-br">

<?php require_once 'head.php'; ?>

<body>
    
<?php require_once 'navBar.php' ?>

<main class="d-flex flex-row justify-content-center align-items-center main_height">

        <div class="container-md col-md-6 form-tabela-rebaixa">
            <h2>Selecionar setor:</h2>

            <form action="tabela_rebaixa_setor.php" method="post" class="text-center">
                <div class="form-group">
                    <select name="setor" id="setor" class="form-select">
                        <option value="padaria">Padaria</option>
                        <option value="mercearia">Mercearia</option>
                    </select>
                    <button class="btn btn-style" name="submit_setor">Gerar tabela 
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-send" viewBox="0 0 16 16">
                            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
                        </svg>
                    </button>
                </div>
            </form>
        </div>


</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>