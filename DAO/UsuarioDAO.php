<?php

class UsuarioDAO {

    public function cadastraUsuario(Usuario $usuario) {

        $pdo = Conexao::getConexao();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        $stmt = $pdo->prepare("INSERT INTO `db_objeto_correio`.`tb_usuarios` (`id_usr`, `nome`, `login`, `senha`) VALUES (NULL, ?, ?, ?)");
        $stmt->bindValue(1, $usuario->getNome());
        $stmt->bindValue(2, $usuario->getLogin());
        $stmt->bindValue(3, md5($usuario->getSenha()));
        if ($stmt->execute()) {
            return true;
        } else {
            $pdo->rollBack();
            return false;
        }
    }

    public function autenticaUsuario(Usuario $usuario) {

        $pdo = Conexao::getConexao();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

        $stmt = $pdo->prepare("SELECT * FROM `tb_usuarios` WHERE `login` = ? AND `senha` = ?");
        $stmt->bindValue(1, $usuario->getLogin());
        $stmt->bindValue(2, md5($usuario->getSenha()));
        $stmt->execute();
        $array = $stmt->fetch();
        if (is_array($array) and count($array) > 0) {
            return new Usuario($array['id_usr'], $array['nome'], $array['login'], $usuario->getSenha());
        }
        else{
            return false;
        }
    }

}

?>
