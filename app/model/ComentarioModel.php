<?php

class ComentarioModel{
    public $id;
    public $texto;
    public $id_usuario;
    public $id_dibujo;
    public $id_padre;
    
    function getId() {
        return $this->id;
    }

    function getTexto() {
        return $this->texto;
    }

    function getId_usuario() {
        return $this->id_usuario;
    }

    function getId_dibujo() {
        return $this->id_dibujo;
    }

    function getId_padre() {
        return $this->id_padre;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTexto($texto) {
        $this->texto = $texto;
    }

    function setId_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    function setId_dibujo($id_dibujo) {
        $this->id_dibujo = $id_dibujo;
    }

    function setId_padre($id_padre) {
        $this->id_padre = $id_padre;
    }


}