<?php 

class Menu_model extends Model
{
	
	function newcategory($post){
		DB::insert('menucat',[
			'name' => $post['name'],
			'nameSeo' => seo($post['name']),
			
		]);
		redirect('menu');
	}

	function new($post){
		DB::insert('menu',[
			'name' => $post['name'],
			'nameSeo' => seo($post['name']),
			'link' => $post['link'],
			'catID' => $post['category'],
			'lang' =>  $post['lang']
		]);
		redirect('menu');
	}


	function update($post){
		DB::where('id', $post['id'])->update('menu',[
			'name' => $post['name'],
			'nameSeo' => seo($post['name']),
			'link' => $post['link'],
			'catID' => $post['category'],
			'lang' =>  $post['lang']
		]);
		redirect('menu');
	}


}