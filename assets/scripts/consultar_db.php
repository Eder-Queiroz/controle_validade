<?php

require_once 'conexao.php';

$sql = 'SELECT codeBar, marca, nome, peso, setor, unidade, dataVenc FROM adicionar';

$conexao = novaConexao();
$resultado = $conexao -> query($sql);

$registro = [];

if($resultado -> num_rows > 0) {
    while($row = $resultado -> fetch_assoc()) {
        $registro[] = $row; 
    }
}elseif($conexao -> error) {
    echo 'Erro: ' . $conexao -> error;
}

$conexao -> close();

?>