<?php namespace Project\Controllers;
use Import, DB, ML;

class Home extends Controller
{
   
    public function main(String ...$parameters){  
        
        View::homeContent(DB::orderBy('id','desc')->limit('5')->contentResult())
            ::get('main');
    } 

    public function s404(){
        # Sets masterpage title.
        Masterpage::title('404! File Not Found');
    }
}