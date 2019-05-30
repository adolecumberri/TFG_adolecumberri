<?php
class BlogModel{
    public $id;
    public $date;
    public $titulo;
    public $texto;
    public $id_dibujo;
    
    function getId() {
        return $this->id;
    }

    function getDate() {
        return $this->date;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getTexto() {
        return $this->texto;
    }

    function getId_dibujo() {
        return $this->id_dibujo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setTexto($texto) {
        $this->texto = $texto;
    }

    function setId_dibujo($id_dibujo) {
        $this->id_dibujo = $id_dibujo;
    }


}

