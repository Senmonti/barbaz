<?php

require_once '../App/Core/autoloader.php';
session_start();

if ($_SERVER['REQUEST_URI'] === '/') header('location: /home/index');

// start point. debug with console
