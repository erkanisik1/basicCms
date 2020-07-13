<?php 

class Content_model extends model
{
	
	function new($post){
		
		DB::insert('content',[
			'title' 		=> $post['title'],
			'titleSeo'		=> seo($post['title']),
			'categoryId' 	=> $post['category'],
			'content' 		=> $post['content'],
			'keywords' 		=> $post['keywords'],
			'description' 	=> $post['description'],
			'mainpage' 		=> $post['mainpage'],
			'status'		=> '1',
			'author' 		=> '1'

		]);
		if (!DB::error()) {
			redirect('content');	
		}else{
			@Html::alertSuccess(DB::error());
		}
		
	}


	function update($post){

		DB::where('id',$post['id'])->update('content',[
			'title' 		=> $post['title'],
			'titleSeo'		=> seo($post['title']),
			'categoryId' 	=> $post['category'],
			'content' 		=> $post['content'],
			'keywords' 		=> $post['keywords'],
			'description' 	=> $post['description'],
			'mainpage' 		=> $post['mainpage'],
			'status'		=> '1',
			'author' 		=> '1'

		]);
		if (!DB::error()) {
			redirect('content');	
		}

	}

}