<?php

require_once 'conexao.php';
$conexao = novaConexao();

if($_GET['excluir']) {

    $excluirSQL = 'DELETE FROM adicionar WHERE codeBar = ?';
    $stmt = $conexao -> prepare($excluirSQL);
    $stmt -> bind_param('i', $_GET['excluir']);
    $stmt -> execute();

}

// --fazendo consulta no banco de dados.

$sql = 'SELECT codeBar, marca, nome, peso, setor, unidade, dataVenc FROM adicionar';

$resultado = $conexao -> query($sql);

$registros = [];

if($resultado -> num_rows > 0) {
    while($row = $resultado -> fetch_assoc()) {
        $registros[] = $row; 
    }
}elseif($conexao -> error) {
    echo 'Erro: ' . $conexao -> error;
}

$conexao -> close();

?>