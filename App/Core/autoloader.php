<?php

// partial autoload classes

spl_autoload_register(function ($class) {
    include str_replace(
        '\\',
        '/',
        $_SERVER['DOCUMENT_ROOT'] . '/' . $class . '.php'
    );
});
