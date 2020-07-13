<?php namespace Project\Controllers;
use Method, DB;
class Category extends Controller
{
    public function main()
    {  
       
    } 

    function new(){
    	if (Method::post()) {$this->Category_model->new(Method::post());}
        View::get('new');
    }


    function update($id){
    	if (Method::post()) {$this->Category_model->update(Method::post());}
        View::id($id)->get('update');
    }

    function delete($id){
    	DB::where('id', $id)->delete('content_category');
    	redirect('category');
    }


}