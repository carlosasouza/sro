<?php

include_once './BD/Conexao.php';
include_once './DAO/UsuarioDAO.php';

class UsuarioController{

    public function cadastrar(Usuario $usuario) {
        $dao = new UsuarioDAO();
        return ($dao->cadastraUsuario($usuario)) ? true : false;
    }

    public function autenticar(Usuario $usuario) {
        $dao = new UsuarioDAO();
        $autentica = $dao->autenticaUsuario($usuario);
        if(is_object($autentica) and $autentica != false){
            return $autentica;
        }
        else{
            return false;
        }
    }    
    
}

?>
