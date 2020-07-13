<?php namespace Project\Controllers;
use Method;
class Content extends Controller
{
    public function main(String ...$parameters)
    {  
        
        Masterpage::title("Elotec Admin");
    } 

    function new(){
        
    	if (Method::post()) {$this->content_model->new(Method::post());}
        View::get('new');
    }


     function edit($id){
     	if (Method::post()) {$this->content_model->update(Method::post());}
        View::id($id)->get('edit');
    }


}