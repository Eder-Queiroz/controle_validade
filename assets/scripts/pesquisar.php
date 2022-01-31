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