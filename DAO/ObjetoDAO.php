<?php

class ObjetoDAO {

    public function cadastraObjeto(Objeto $objeto) {

        $pdo = Conexao::getConexao();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        $stmt = $pdo->prepare("INSERT INTO `db_objeto_correio`.`tb_objetos` (`cod_rastreio`, `desc_obj`, `tb_usuarios_id_usr`) VALUES (?, ?, ?)");
        $stmt->bindValue(1, $objeto->getCodigo());
        $stmt->bindValue(2, $objeto->getDescricao());
        $stmt->bindValue(3, $objeto->getCodigo_usuario());
        if ($stmt->execute()) {
            return true;
        } else {
            $pdo->rollBack();
            return false;
        }
    }

   public function listarObjetos(Usuario $usuario) {

        $pdo = Conexao::getConexao();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        $stmt = $pdo->prepare("SELECT * FROM `db_objeto_correio`.`tb_objetos` WHERE `tb_usuarios_id_usr` = ?");
        $stmt->bindValue(1, $usuario->getId());

        $stmt->execute();
        $array = $stmt->fetchAll();
        
        if (is_array($array) and count($array) > 0) {
            return $array;
        }        

    }    
    
}

?>
