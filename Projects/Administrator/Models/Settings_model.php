<?php 

class Settings_model extends Model
{
	
	function new($post){
		DB::insert('settings',[
			'key_name' => $post['key'],
			'value' => $post['value']			
		]);

		redirect('settings');
	}


	function update($post){
		DB::where('id', $post['id'])->update('settings',[
			'key' => $post['key'],
			'value' => $post['value']	
		]);
		redirect('settings');
	}


}