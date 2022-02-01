<?php

ini_set('display_errors', 1);

include_once 'assets/scripts/selec_tabela_rebaixa.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<?php require_once 'head.php'; ?>

<body>
    
<?php require_once 'navBar.php' ?>

<main class="d-flex flex-column justify-content-center align-items-center lista_validade_main">

    <section class="container-md col-10">

        <table class="table table-striped table-bordered">

            <thead>
                <th>Cod. Barra</th>
                <th>Marca</th>
                <th>Nome</th>
                <th>Peso</th>
                <th>Setor</th>
                <th>Unidade</th>
                <th>Data Venc.</th>
            </thead>
            <tbody>
                <?php foreach($registros as $registro): ?>
                    <tr>
                        <td><?= $registro['codeBar'] ?></td>
                        <td><?= $registro['marca'] ?></td>
                        <td><?= $registro['nome'] ?></td>
                        <td><?= number_format($registro['peso'], 3, ',', '.') . 'Kg' ?></td>
                        <td><?= $registro['setor'] ?></td>
                        <td><?= $registro['unidade'] ?></td>
                        <td><?= date('d/m/Y', strtotime($registro['dataVenc'])) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>

        </table>

    </section>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>