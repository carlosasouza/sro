<?php

session_start();
include_once './Model/Usuario.php';

$usuario = new Usuario();
$usuario = unserialize(@$_SESSION['usuario']);

if(@$_SESSION['autenticado'] != true and isset($_SESSION['usuario'])){
    $_SESSION['autenticado'] = true;
    echo "<script>alert('Olá ".@$usuario->getNome()."! Autenticado com Sucesso!')</script>";
} else if(@!$_SESSION['usuario']){
    echo "<script>alert('Sem acesso!')</script>";
    echo "<script language= 'JavaScript'>location.href='./'</script>";
}

?>
