<?php

include_once 'validar_form_alterar.php';

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
        unset($dados);
    }

}

?>