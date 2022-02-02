<?php

    ini_set('display_errors', 0);

    session_start();

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
        
        <div class="cintainer-md d-flex flex-row justify-content-center align-items-center">
            <form action="pesquisar_lista_validade.php" method="post">
        
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="pesquisar" placeholder="Pesquisar" aria-label="Pesquisar" aria-describedby="submit_pesquisar">

                    <button class="btn btn-outline-blue" id="submit_pesquisar" name="submit_pesquisar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                    </button>
                </div>

            </form>

            <form action="filtro_data_vencer.php" method="post" class="ms-3 mb-3">
                <button class="btn btn-success" name="submit_filtrar">
                    Filtrar
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
                        <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </button>
            </form>
        </div>

        <section class="container-md col-10">

            <div class="table-responsive-md">
                
                <table class="table table-striped table-bordered">
    
                    <thead>
                        <th scope="col">Cod. Barra</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Setor</th>
                        <th scope="col">Unidade</th>
                        <th scope="col">Data Venc.</th>
                        <th scope="col">Excluir</th>
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
                                    <a href="?excluir=<?= $registro['codeBar'] ?>" class="btn bg_color_primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-exclude" viewBox="0 0 16 16">
                                            <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm12 2H5a1 1 0 0 0-1 1v7h7a1 1 0 0 0 1-1V4z"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
    
                </table>
                
            </div>

        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>