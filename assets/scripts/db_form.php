<?php

require_once 'conexao.php';

$conexao = novaConexao();

require_once 'db_form_alterar.php';
require_once 'db_form_adicionar.php';

$conexao -> close();

?>