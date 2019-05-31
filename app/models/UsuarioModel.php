<?php


class UsuarioModel {
    public $id;
    public $date;
    public $nick;
    public $admin;
    public $password;
    public $email;
    function getId() {
        return $this->id;
    }

    function getDate() {
        return $this->date;
    }

    function getNick() {
        return $this->nick;
    }

    function getAdmin() {
        return $this->admin;
    }

    function getPassword() {
        return $this->password;
    }

    function getEmail() {
        return $this->email;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setNick($nick) {
        $this->nick = $nick;
    }

    function setAdmin($admin) {
        $this->admin = $admin;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setEmail($email) {
        $this->email = $email;
    }

      
}