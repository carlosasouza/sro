<?php

@$nome = trim($_REQUEST['txt_nome']);
@$login = trim($_REQUEST['txt_login']);
@$senha = trim($_REQUEST['txt_senha']);

if (!empty($nome) and !empty($login) and !empty($senha)) {
    $acao = 'CADASTRO';
} elseif (!empty($login) and !empty($senha)) {
    $acao = 'LOGIN';
}
else{
    $acao = false;
}

switch ($acao) {
    case 'CADASTRO':
        include_once './Model/Usuario.php';
        include_once './Controller/UsuarioController.php';
        $usuario = new Usuario('', $nome, $login, $senha);
        $usuarioController = new UsuarioController();
        if($usuarioController->cadastrar($usuario)){
            header('Location: sucessoCadastro.php');
        }
        else{
            header('Location: erro.php');
        }
        break;
    case 'LOGIN':
        header('Location: login.php');
        break;
    default:
        header('Location: index.php');
        break;
}
?>