<?php namespace Project\Controllers;
use Method;

class Menu extends Controller{
   
    public function main(){
    } 

     function newcategory(){
        
    	if (Method::post()) {$this->Menu_model->newcategory(Method::post());}
        View::get('newcategory');
    }

    function new(){
        
    	if (Method::post()) {$this->Menu_model->new(Method::post());}
        View::get('new');
    }
}