<?php namespace Project\Controllers;

class Home extends Controller
{
   
    public function main()
    {     } 

    public function s404()
    {
        # Sets masterpage title.
        Masterpage::title('404! File Not Found');
    }
}