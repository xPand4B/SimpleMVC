<?php
/**
 * Core Controller
 * 
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * 
 * @uses Blade Tempalte Engine
 * 
 * @method protected model($model)
 * @method public view($view, $data = [])
 */

namespace Core;

use Jenssegers\Blade\Blade;

class Controller{

    /**
     * Include and Return model
     * 
     * @param model $model [Model Name]
     * 
     * @return Model $model
     */
    protected function model($model){
        $filePath = '../app/Models/' . $model . '.php';
        // Check if model file exists
        if(file_exists($filePath)){
            require_once $filePath;
            return new $model();
        }
    }


    /**
     * Include view, depending on call inside specific controller
     * 
     * @uses Blade Template Engine
     * 
     * @param string  $view [View Name]
     * @param array $data [Optional: Data to parse inside view]
     * 
     * @return void
     */
    public function view($view, $data = []){
        $test = new Blade(
            '../resources/views',
            '../storage/views'
        );

        echo $test->render($view, $data);
    }

}