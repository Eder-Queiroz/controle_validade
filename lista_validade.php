<?php

    ini_set('display_errors', 0);

    include_once 'assets/scripts/consultar_db.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <?php include_once 'head.php' ?>

</head>
<body>
    
    <?php include_once 'navBar.php' ?>
    
    <main class="d-flex flex-column justify-content-center align-items-center lista_validade_main">
        
        <form action="assets/scripts/pesquisar.php" method="post">
    
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="pesquisar" placeholder="Pesquisar" aria-label="Pesquisar" aria-describedby="submit_pesquisar">

                <button class="btn btn-outline-secondary" id="submit_pesquisar" name="submit_pesquisar">
                    <img src="assets/images/search.svg" alt="Pesquisar">
                </button>
            </div>
    
        </form>

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
                                    <img src="assets/images/exclude.svg" alt="excluir"></i>
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