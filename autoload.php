<?php

function autocargar($classname){
    include 'app/controller/' . $classname . '.php';
}

spl_autoload_register('autocargar');
