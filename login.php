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
    header('Localização: novo.php');
        break;
    case 'LOGIN':
        include_once './Model/Usuario.php';
        include_once './Controller/UsuarioController.php';
        $usuario = new Usuario('', $nome, $login, $senha);
        $usuarioController = new UsuarioController();
        $autentica = $usuarioController->autenticar($usuario);
        
        if(is_object($autentica)){
            session_start();
            $_SESSION['usuario'] = serialize($autentica);
            header('Location: home.php');
        }
        else {
            header('Location: fail.php');
        }
        break;
    default:
        header('Location: fail.php');
        break;
}
?>