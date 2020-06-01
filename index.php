<?php

require "helpers.php";

spl_autoload_register(function($classname){
        if (file_exists("src/$classname.php")) {
            require "src/$classname.php";
        }
});

$jose = new Ciudadano('Jose', 25418204, new Cuenta);
$migdaly = new Ciudadano('Migdaly', 27890757, new Cuenta);

//$c = new Cuenta();
//$c->Deposit($migdaly, 5500);

//$jose->Tranferir($migdaly, 5500);


