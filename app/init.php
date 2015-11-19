<?php
session_start();

// output buffer
ob_start();

// requires all the needed composer libraries
require_once  __DIR__ . '/vendor/autoload.php';

// autoload classes in classes folder
spl_autoload_register(function($classes){
    require 'classes/' . $classes . '.php';
});

// setup the .env accessibility
$dotenv = new \Dotenv\Dotenv(__DIR__);
$dotenv->load();

// initialize new messagebag
$messageBag = new MessageBag();

// gets the data from the .env file... change your data there.
define('ROOT', getenv('ROOT'));
define('DSN', 'mysql:host=' . getenv('DBHOST') . ';dbname=' . getenv('DBNAME'));
define('DBPASS', getenv('DBPASS'));
define('DBUSER', getenv('DBUSER'));

require_once __DIR__ . '/functions.php';
require_once  __DIR__  . '/config/database.php';



