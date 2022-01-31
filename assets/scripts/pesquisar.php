<?php

require_once 'conexao.php';

$conexao = novaConexao();

if(isset($_POST['submit_pesquisar'])) {

    $pesquisar = $conexao -> real_escape_string($_POST['pesquisar']);

    $sql = "SELECT * FROM adicionar
    WHERE codeBar LIKE '%$pesquisar%' OR nome LIKE '%$pesquisar%' OR marca LIKE '%$pesquisar%' OR setor LIKE '%$pesquisar%'";

    $resultado = $conexao -> query($sql);

    $registros = [];

    if($resultado -> num_rows > 0) {
        while($row = $resultado -> fetch_assoc()) {
            $registros[] = $row; 
        }
    }else {
        $erro = 'Nenhum resultado foi encontrado!';
    }

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include_once '../../head.php' ?>
</head>
<body>
    <?php include_once '../../navBar.php' ?>
    
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