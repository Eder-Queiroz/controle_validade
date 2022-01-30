<?php

include_once 'validar_form.php';

if(is_countable($erros) && !count($erros)) {

    require_once 'conexao.php';

    $sql = "INSERT INTO adicionar 
    (codeBar, marca, nome, peso, unidade, dataVenc, setor)
    VALUE (?, ?, ?, ?, ?, ?, ?)";

    $conexao = novaConexao();
    $stmt = $conexao -> prepare($sql);

    $params = [
        $dados['codeBar'],
        $dados['marca'],
        $dados['nome'],
        $dados['peso'] ? str_replace(',', '.', $dados['peso']) : null,
        $dados['unidade'],
        $data,
        $dados['setor']
    ];

    $stmt -> bind_param('issdiss', ...$params);

    if($stmt -> execute()) {
        unset($dados);
    }

}

?>