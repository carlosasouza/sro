<?php

$nome = trim($_REQUEST['txt_nome']);
$login = trim($_REQUEST['txt_login']);
$senha = trim($_REQUEST['txt_senha']);

if(!empty($nome) and !empty($login) and !empty($senha)){
    $acao = 'CADASTRO';
}
elseif (!empty($login) and !empty($senha)) {
    $acao = 'LOGIN';
}

switch ($acao) {
    case 'CADASTRO':
        include_once './Model/Usuario.php';
        $usuario = new Usuario($nome, $login, $senha);
        break;
    case 'LOGIN':
        include_once './Model/Usuario.php';
        $usuario = new Usuario($nome, $login, $senha);

        break;
    default:
        break;
}

?>
