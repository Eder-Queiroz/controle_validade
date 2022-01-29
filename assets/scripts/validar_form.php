<?php namespace assets\scripts\validar_form;


if(count($_POST) > 0) {
    
    $dados = $_POST;
    $erros = [];

    if(trim($dados['codeBar']) == "" || strlen($dados['codeBar']) != 13) {
        $erros['codeBar'] = 'Codigo de barras inválido.';
    }

    if(trim($dados['nome']) == "") {
        $erros['nome'] = 'Nome é obrigatório.';
    }

    if(trim($dados['marca']) == "") {
        $erros['marca'] = 'Marca é obrigatório.';
    }

    $pesoConfig = ['options' => ['decimal' => ',']];

    if(!filter_var($dados['peso'], FILTER_VALIDATE_FLOAT, $pesoConfig)) {
        $erros['peso'] = 'O peso deve ser em gramas. Ex: 500g';
    }

    $unidadeConfig = ['options' => ['min_range' => 0]];

    if(!filter_var($dados['unidade'], FILTER_VALIDATE_INT, $unidadeConfig)) {
        $erros['unidade'] = 'Unidades inválida!';
    }

    if($dados['data'] == null) {
        $erros['data'] = 'A data é obrigatório!';
    }

}

?>