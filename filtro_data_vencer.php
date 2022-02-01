<?php 

ini_set('display_errors', 0);

include_once 'assets/scripts/filtrar_data_vencer.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include_once 'head.php' ?>
</head>
<body>
    <?php include_once 'navBar.php' ?>
    
    <main class="d-flex flex-column justify-content-center align-items-center lista_validade_main">

        <a href="lista_validade.php" class="btn btn-primary col-2 mb-3">
            Voltar 
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi     bi-arrow-return-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                </svg>
        </a>

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
                    <th>Excluir</th>
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
                            <td>
                                <a href="?excluir=<?= $registro['codeBar'] ?>" class="btn btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-exclude" viewBox="0 0 16 16">
                                        <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm12 2H5a1 1 0 0 0-1 1v7h7a1 1 0 0 0 1-1V4z"/>
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>

            </table>

        </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>