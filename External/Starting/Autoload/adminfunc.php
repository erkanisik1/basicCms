<?php 


function content_list(){
	return DB::select('content.id,content.title, content.status, content.createDate, content.hit, content.mainpage, content.id AS i_id, content_category.name')
		->orderBy('content.id','DESC')
		->innerJoin('content_category.id','content.categoryId')
		->get('content')
		->result();
}


function page_list(){
  return DB::orderBy('id','DESC')->get('page')->result();
}

function settings_list(){
  return DB::orderBy('id','DESC')->get('settings')->result();
}

function contentKat($id = '0'){
  return DB::where('parent_id',$id,'AND')->where('status','1')->get('content_category')->result();
}

function category_list($id = '0'){
	return DB::where('parent_id',$id)->get('content_category')->result();
}

function  yonetimKategori($id = 0,$secim = 0,$tire = 0, $select = ''){

  $sorgu = DB::where('parent_id', $id)->get('content_category')->result();
  foreach ($sorgu as $key) {
    if ($key->parent_id == 0) {
      $tire = 0;
      $style = 'color:#000;font-weight:bolder;font-size:13px;';
    }

    if ($secim != $key->parent_id){
      $secim = $key->parent_id;
      $style = 'color:#000';
      $tire++;
    }
   	if($key->id == $select){$sel = 'selected';}else{$sel='';}
    echo '<option value="'.$key->id.'" style="'.$style.'" '.$sel.' >'.str_repeat('-&nbsp;',$tire).$key->name."</option>";
    yonetimKategori($key->id,$secim,$tire,$select);
  }
}

function cat_update($id){
	return DB::where('id',$id)->get('content_category')->row();
}

function settings_update($id){
  return DB::where('id',$id)->get('settings')->row();
}