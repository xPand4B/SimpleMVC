<?php
/**
 * @author Eric Heinzl <eric.heinzl@gmail.com>
 * 
 * @uses Core\Controller
 * 
 * @method public index()
 */

use Core\Controller;

class Home extends Controller{


    /**
     * /public/home
     * /public/
     * 
     * @return void
     */
    public function index(){
        /**
         * View is calling the blade template engine
         */
        $this->view('pages.home');
    }

}