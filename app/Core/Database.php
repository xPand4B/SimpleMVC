<?php
/**
 * Contains database settings for current model
 * 
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * 
 * @uses Illuminate\Capsule
 * 
 */

namespace Core;

use Illuminate\Database\Capsule\Manager as Capsule;

class Database extends Capsule{


    public function __construct(){
        $capsule = new Capsule;
        $capsule->addConnection([
            'driver'    => env('DB_CONNECTION', 'mysql'),
            'host'      => env('DB_HOST',       '127.0.0.1'),
            'username'  => env('DB_USERNAME',   'homestead'),
            'password'  => env('DB_PASSWORD',   ''),
            'database'  => env('DB_DATABASE',   'homestead'),
            'charset'   => env('DB_CHARSET',    'utf8'),
            'collation' => env('DB_COLLATION',  'utf8_unicode_ci'),
            'prefix'    => env('DB_PREFIX',     ''),
        ]);
        // Setup the Elowuent ORM
        $capsule->bootEloquent();
    }

}