<?php

require_once 'conexao.php';

$conexao = novaConexao();

$tz = new DateTimeZone('America/Sao_Paulo');

$data_atual = new DateTime(null, $tz);
$data_atual_formatada = $data_atual -> format('Y-m-d');

$data_acrescentada = new DateTime(null, $tz);
$data_acrescentada -> modify('+14 day');
$data_acrescentada_formatada = $data_acrescentada -> format('Y-m-d');  

if(isset($_POST['submit_setor'])) {

    $filtrar = $conexao -> real_escape_string($_POST['setor']);

    $sql = "SELECT * FROM adicionar
    WHERE setor LIKE '%$filtrar%' AND dataVenc >= '$data_atual_formatada' AND dataVenc <= '$data_acrescentada_formatada'
    ORDER BY dataVenc";

    $resultado = $conexao -> query($sql);

    $registros = [];

    if($resultado -> num_rows > 0) {

        while($row = $resultado -> fetch_assoc()) {
            $registros[] = $row;
        }

    }else {
        echo "Nenhum produto para rebeixa do setor: {$_POST['setor']}";
    }

}

?>