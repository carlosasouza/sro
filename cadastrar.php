<?php

session_start();
include_once './Model/Usuario.php';
include_once './Model/Objeto.php';
include_once './Controller/ObjetoController.php';

$usuario = new Usuario();
$usuario = unserialize($_SESSION['usuario']);

@$codigo = trim($_REQUEST['txt_codigo']);
@$descricao = trim($_REQUEST['txt_desc']);

$objetoController = new ObjetoController();
if ($objetoController->cadastrar(new Objeto($codigo, $descricao, $usuario->getId()))) {
    header('Location: sucessoCadastroObjeto.php');
} else {
    header('Location: erro.php');
}
?>
