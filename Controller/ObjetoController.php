<?php

include_once './BD/Conexao.php';
include_once './DAO/ObjetoDAO.php';

class ObjetoController {

    public function cadastrar(Objeto $objeto) {
        $dao = new ObjetoDAO();
        return ($dao->cadastraObjeto($objeto)) ? true : false;
    }

    public function listar(Usuario $usuario) {
        $dao = new ObjetoDAO();
        $array = $dao->listarObjetos($usuario);
        return (is_array($array))? $array : false;
    }

}

?>
