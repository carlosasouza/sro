<?php
/*
 * Conexao de banco de dados.
 */
    abstract class Conexao{
        public static function getConexao(){
            try
            {
                $pdo = new PDO('mysql:dbname=db_objeto_correio;host=127.0.0.1', 'root', '');
                return $pdo;
            }
            catch (PDOException $e)
            {
                echo 'Falha na conexão:'.$e->getMessage();
            }
        }
    }
?>
