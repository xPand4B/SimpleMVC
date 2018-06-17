<?php

// Initiate application
require_once __DIR__.'/../app/init.php';


use Core\Database;
use Core\App;


// Create database connection object
new Database();

// Create application instance
$app = new App();
