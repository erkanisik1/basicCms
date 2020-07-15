<?php namespace Project\Controllers;
use Method;
class Settings extends Controller
{
   
    public function main()
    {     } 

     function new(){
    	if (Method::post()) {$this->settings_model->new(Method::post());}
        View::get('new');
    }


     function edit($id){
     	if (Method::post()) {$this->settings_model->update(Method::post());}
        View::id($id)->get('edit');
    }

   
}