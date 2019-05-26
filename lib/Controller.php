<?php

class Controller
{
    //archivo $view y $js
    protected $view = '';
    protected $js = '';

    
    public function __construct()
    {
          //vacio
    }
    
    public function getView() {  return $this->view; }
    public function setView($view)  { $this->view = $view; }

    public function getJs() {  return $this->js; }
    public function setJs($js)  { $this->js = $js; }
}