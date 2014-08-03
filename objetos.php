<?php

session_start();

include_once './Model/Usuario.php';
//include_once './Model/Objeto.php';
include_once './Controller/ObjetoController.php';

$usuario = new Usuario();

$usuario = unserialize(@$_SESSION['usuario']);

$objetoController = new ObjetoController();

$array = $objetoController->listar($usuario);

if(is_array($array)){
    require_once './View/objeto/objetos.php';
}

else{
    echo "<script>alert('Não foram encontrados objetos!')</script>";
    echo "<script language= 'JavaScript'>location.href='home.php'</script>";
}

?>
