<?php

class Objeto {
    
    private $codigo;
    private $descricao;
    private $codigo_usuario;
    
    function __construct($codigo = '', $descricao = '', $codigo_usuario = '') {
        $this->codigo = $codigo;
        $this->descricao = $descricao;
        $this->codigo_usuario = $codigo_usuario;
    }
    
    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getCodigo_usuario() {
        return $this->codigo_usuario;
    }

    public function setCodigo_usuario($codigo_usuario) {
        $this->codigo_usuario = $codigo_usuario;
    }
    
}

?>
