<?php 

// --valida o formulario para alterar produtos.

if(count($_POST) > 0) {
    
    $dados = $_POST;
    $erros = [];

    if(trim($dados['barCode']) == "" || strlen($dados['barCode']) != 13) {
        $erros['barCode'] = 'Codigo de barras inválido.';
    }else {
        $convert_str_int_barCode = intval($dados['barCode']);
    }

    $unidadeConfig = ['options' => ['min_range' => 0]];

    if(!filter_var($dados['unidade'], FILTER_VALIDATE_INT, $unidadeConfig)) {
        $erros['unidade'] = 'Unidades inválida!';
    }

    if(isset($dados['data'])) {
        
        $data = DateTime::createFromFormat('Y-m-d', $dados['data']);
        
        if(!$data) {
            $erros['data'] = 'A data é obrigatório!';
        }
    }

}

?>