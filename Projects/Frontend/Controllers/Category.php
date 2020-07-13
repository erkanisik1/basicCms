<?php namespace Project\Controllers;
use Import, DB;

class Category extends Controller{
    
    public function main($id){  
        Masterpage::title('EloTec');
        $list = DB::where('categoryId',$id)->orderBy('id','desc')->contentResult();
        $Name = categoriRow($id)->name;
        View::homeContent($list)
        	::categoryName($Name)
            ::get('category');
        }   
}