<?php

spl_autoload_register(function($classname){
        if (file_exists("src/$classname.php")) {
            require "src/$classname.php";
        }
});

$jose = new Ciudadano('Jose', 25418204);
$migdaly = new Ciudadano('Migdaly', 27898123);

