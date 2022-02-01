<?php

require_once 'conexao.php';

$conexao = novaConexao();

if(isset($_POST['submit_filtrar'])){

    $tz = new DateTimeZone('America/Sao_Paulo');
    $data_acrescentada = new DateTime(null, $tz);
    $data_acrescentada -> modify('+2 day');
    $data_acrescentada_formatada = $data_acrescentada -> format('Y-m-d');

    $sql = "SELECT * FROM adicionar
    WHERE dataVenc <= '$data_acrescentada_formatada' ORDER BY dataVenc DESC";

    $resultado = $conexao -> query($sql);

    $registros = [];

    if($resultado -> num_rows > 0) {
        while($row = $resultado -> fetch_assoc()){
            $registros[] = $row;
        }
    }else {
        echo "Erro: " . $conexao -> error;
    }

}

?>