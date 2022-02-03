<?php

// --valida o formulario para adcionar produtos.

if(count($_POST) > 0) {
    
    $dados = $_POST;
    $erros = [];

    if(trim($dados['codeBar']) == "" || strlen($dados['codeBar']) != 13) {
        $erros['codeBar'] = 'Codigo de barras inválido.';
    }else {
        $convert_str_int_codeBar = intval($dados['codeBar']);
    }

    if(trim($dados['nome']) == "") {
        $erros['nome'] = 'Nome é obrigatório.';
    }

    if(trim($dados['marca']) == "") {
        $erros['marca'] = 'Marca é obrigatório.';
    }

    $pesoConfig = ['options' => ['decimal' => ',']];

    if(!filter_var($dados['peso'], FILTER_VALIDATE_FLOAT, $pesoConfig)) {
        $erros['peso'] = 'O peso deve ser em gramas. Ex: 0,500';
        
    }
}

?>