<?php 

class Category_model extends Model
{
	
	function new($post){
		DB::insert('content_category',[
			'name' => $post['name'],
			'nameSeo' => seo($post['name']),
			'parent_id' => $post['parent_id']
		]);
		redirect('category');
	}


	function update($post){
		DB::where('id', $post['id'])->update('content_category',[
			'name' => $post['name'],
			'nameSeo' => seo($post['name']),
			'parent_id' => $post['parent_id']
		]);
		redirect('category');
	}


}