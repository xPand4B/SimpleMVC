<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * 
 * @uses Core\Controller
 * @uses Model::<NAME>
 * 
 * @method public index()
 */
 
/**
 * If you want to access tables from database
 * @source https://laravel.com/docs/5.6/queries
 * 
 * use Model\<NAME> as <NAME>;
 */

use Core\Controller;

class Classname extends Controller{

    
    /**
     * /public/
     * 
     * @return void
     */
    public function index(){
        /**
         * View is calling the blade template engine
         * @example $this->view(<VIEWNAME>, <DATA-ARRAY>);
         */
        $this->view();
    }
    

}