<?php namespace Project\Controllers;
use Import, DB;

class Content extends Controller{
    
    public function main($id){  
        Masterpage::title('EloTec');
        $list = DB::where('id',$id)->contentRow();
       
        View::homeContent($list)
        	::get('Content');
        }   
}