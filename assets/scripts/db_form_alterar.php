<?php

include_once 'validar_form_alterar.php';

// --formatando data do input type=date para exibir no feedback.

$formatandoData = new DateTime($_POST['data']);
$dataFormatada = strftime('%d/%m/%Y', $formatandoData -> getTimestamp());

// --alterando itens do banco de dados.

if(is_countable($erros) && !count($erros)) {

    $sql = 'UPDATE adicionar
    SET unidade = ?, dataVenc = ?
    WHERE codeBar = ?';

    $stmt = $conexao -> prepare($sql);

    $params = [
        $dados['unidade'],
        $data ? $data -> format('Y-m-d') : null,
        $convert_str_int_barCode
    ];

    $stmt -> bind_param('isi', ...$params);

    if($stmt -> execute()) {
        $feedbackAlterar = "O produto {$convert_str_int_barCode} foi alterado: Unidade = {$_POST['unidade']} e Data = {$dataFormatada}";
        unset($dados);
    }

}

?>