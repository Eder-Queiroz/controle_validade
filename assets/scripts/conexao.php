<?php

    // função para fazer a conexão com o banco de dados.

    function novaConexao($banco = 'controle_validade') {

        $servidor = '127.0.0.1';
        $usuario = 'root';
        $senha = 'root';

        $conexao = new mysqli($servidor, $usuario, $senha, $banco);

        if($conexao -> connect_error) {
            die('Erro: ' . $conexao -> connect_error);
        }

        return $conexao;

    }
    
?>