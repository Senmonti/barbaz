<?php

// загрузка классов PHP иначе use не будет работать

spl_autoload_register(function ($class) {
    include str_replace(
        '\\',
        '/',
        $_SERVER['DOCUMENT_ROOT'] . '/' . $class . '.php'
    );
});
