<?php namespace Project\Controllers;
use Import, DB, ML;

class Home extends Controller
{
    /**
     * Home::main
     * 
     * Loads opening page.
     * Location: Views/Home/main.wizard.php
     */
    public function main(String ...$parameters)
    {  
        
        View::homeContent(DB::orderBy('id','desc')->limit('5')->contentResult())
            ::get('main');
       
    } 

    /**
     * Home::s404
     * 
     * Loads show 404 page.
     * Location: Views/Home/s404.wizard.php
     */
    public function s404()
    {
        # Sets masterpage title.
        Masterpage::title('404! File Not Found');
    }
}