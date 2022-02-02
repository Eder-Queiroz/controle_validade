<?php

ini_set('display_errors', 0);

require_once 'conexao.php';

$conexao = novaConexao();

if($_GET['excluir']) {

    $excluirSQL = 'DELETE FROM adicionar WHERE codeBar = ?';
    $stmt = $conexao -> prepare($excluirSQL);
    $stmt -> bind_param('i', $_GET['excluir']);
    $stmt -> execute();

}

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