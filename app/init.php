<?php

// Load autoload
require_once __DIR__.'/../vendor/autoload.php';


// Load .env file as environment variable
$dotenv = new Dotenv\Dotenv(__DIR__.'/../');
$dotenv->load();


// Include Main App controller
require_once __DIR__.'/Core/App.php';


// Include Main Controller file
require_once __DIR__.'/Core/Controller.php';


//Initialize Illuminate Database Connection
require_once __DIR__.'/Core/Database.php';