<?php

spl_autoload_register("autoloader");

function autoloader($classname){
    $path = 'classes/';
    $extension = '.class.php';
    $fileName = $path . $classname . $extension;
    if(file_exists($fileName)){
        include_once $path . $classname . $extension;
    }else{
        return false;
    }
}