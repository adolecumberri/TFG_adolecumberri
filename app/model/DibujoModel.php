<?php

class DibujoModel {
    public $id;
    public $date;
    public $url;
    public $titulo;
    public $id_texto;
    
    function getId() {
        return $this->id;
    }

    function getDate() {
        return $this->date;
    }

    function getUrl() {
        return $this->url;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getId_texto() {
        return $this->id_texto;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setId_texto($id_texto) {
        $this->id_texto = $id_texto;
    }


} 