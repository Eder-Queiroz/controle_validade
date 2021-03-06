<?php

include_once 'validar_form_adicionar.php';

// --inserindo produtos no banco de dados

if(is_countable($erros) && !count($erros)) {

    $sql = "INSERT INTO adicionar
    (codeBar, marca, nome, peso, unidade, dataVenc, setor)
    VALUE (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conexao -> prepare($sql);

    $params = [
        $convert_str_int_codeBar,
        $dados['marca'],
        $dados['nome'],
        $dados['peso'] ? str_replace(',', '.', $dados['peso']) : null,
        $dados['unidade'],
        $data,
        $dados['setor']
    ];

    $stmt -> bind_param('issdiss', ...$params);

    if($stmt -> execute()) {
        $feedback = "O produto {$dados['nome']} - {$dados['codeBar']}, foi adicionado com Sucesso!";
        unset($dados);
    }

}

?>