<?php
require_once './app/core/App.php';
require_once './database/config.php';
require_once './lib/functions.php';
//Tự động require file class khi new class
spl_autoload_register(function ($class_name) {
    if (file_exists('./app/controllers/' . $class_name . '.php')) {
        require_once './app/controllers/' . $class_name . '.php';
    }

    if (file_exists('./app/models/' . $class_name . '.php')) {
        require_once './app/models/' . $class_name . '.php';
    }

    if (file_exists('./database/' . $class_name . '.php')) {
        require_once './database/' . $class_name . '.php';
    }
});
