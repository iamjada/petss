<?php

// This is my controller for the petss project

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();

// Require autoload file
require_once('vendor/autoload.php');

// instantiate fat-free
$f3 = Base::instance();

// define routes
$f3->route('GET /', function(){
    echo 'Pet Home';
});

// run fat-free
$f3->run();