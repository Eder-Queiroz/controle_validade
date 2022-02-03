<?php

ini_set('display_errors', 0);

session_start();

// --conexão com o banco de dados.
require_once 'assets/scripts/db_form.php';
$conexao = novaConexao();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// --verificando e validando usuario e senha, também, criando sessão e cookie.
if($_POST['usuario']) {

    $sql = "SELECT * FROM usuarios
    WHERE usuario = '$usuario'";

    $resultado = $conexao -> query($sql);

    $registros = [];

    if($resultado -> num_rows > 0){
        while($row = $resultado -> fetch_assoc()) {
            $registros[] = $row;
        }
    }else {
        echo 'Erro: ' . $conexao -> error;
    }

    foreach($registros as $registro) {

        $usuarioValido = $usuario === $registro['usuario'];
        $senhaValida = $senha === $registro['senha'];

        if($usuarioValido && $senhaValida) {
         
            $_SESSION['erros'] = NULL;
            $_SESSION['usuario'] = $registro['usuario'];
            $exp = time() + 60 * 60 * 24 * 30;
            setcookie('usuario', $registro['usuario'], $exp);
            header('Location: index.php');
        }

    }

    if(!$_SESSION['usuario']) {
        $_SESSION['erros'] = ['Usuário/Senha inválido!'];
    }

}

$conexao -> close();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include_once 'head.php' ?>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">

        <a href="index.php" class="navbar-brand">
            <img src="assets/images/logo.png" alt="Logo Super Maxi">
        </a>

    </div>

</nav>

<main class="d-flex flex-column justify-content-center align-items-center main_height_login">

    <h2>Login:</h2>

    <?php if($_SESSION['erros']): ?>
        <div class="erros">
            <?php foreach ($_SESSION['erros'] as $erro): ?>
                <p><?= $erro ?></p>
            <?php endforeach ?>
        </div>
    <?php endif ?>

    <section class="container-md col-md-6 section_login">
        
        <form action="#" method="post" class="d-flex flex-column justify-content-center align-items-center">

            <div class="row">
                
                <div class="form-group col-md-6">
                    <label for="usuario">Usuario:</label>
                    <input type="text" name="usuario" id="usuario" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" class="form-control">
                </div>
            </div>                

            <button class="btn btn-style">Entrar</button>

        </form>
    
    </section>

</main>

<?php include_once 'footer.php' ?>

</body>
</html>