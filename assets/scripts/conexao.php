<?php

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

    // $sql = "CREATE TABLE IF NOT EXISTS adicionar (
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     codeBar BIGINT NOT NULL,
    //     marca VARCHAR(100) NOT NULL,
    //     nome VARCHAR(100) NOT NULL,
    //     peso FLOAT NOT NULL,
    //     setor VARCHAR(100) NOT NULL,
    //     unidade INT,
    //     dataVenc DATE
    // )";
    
    // $conexao = novaConexao();
    // $resultado = $conexao -> query($sql);
    
    // if($resultado) {
    //     echo "Sucesso :)";
    // }else {
    //     echo "Erro: " . $conexao -> $error;
    // }
    
    // $conexao -> close();
    

?>