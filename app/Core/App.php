<?php
/**
 * Core App Class
 * 
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * 
 * @method public __construct()
 * @method protected parseURL()
 */

namespace Core;

class App{


    // Default Values
    protected $controller = 'home';
    protected $method     = 'index';
    protected $params     = [];


    /**
     * Get URL params and load Controller, if exists
     * 
     * @return void
     */
    public function __construct(){
        $url = $this->parseURL();

        // Check if controller file exist
        if(file_exists('../app/Controllers/' . $url[0] . '.Controller.php')){
            // Overwrite controller name
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/Controllers/' . $this->controller . '.Controller.php';
        // Call new instance
        $this->controller = new $this->controller;

        // Check if method inside selected controller exists
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // If there are params set, get values, else, leave param array empty
        $this->params = $url ? array_values($url) : [];

        // Call selected controller with method and params, if set
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

 
    /**
     * Parse URL to work with it
     *
     * @return string $url [URL Array]
     */
    protected function parseURL(){
        if(isset($_GET['url'])){
            // Split url so everything between "/" will be an array field
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }

}