<?php 

function contentImage($data) {
    $resimbir = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', htmlspecialchars_decode($data), $matches);
    if($output){
      $resimbir = $matches['1']['0'] ;
    }
    if(empty($resimbir)){ //Eğer resim eklememişseniz
      $resimbir = '/uploads/images/eagle.png';
    }
    return $resimbir;
  }

  function kelimebol($metin, $karaktersayisi){ 
      $icerik = htmlspecialchars_decode($metin);
      $icerik = strip_tags($icerik);
      $icerik = str_replace(array("\t","\r","\n"), ' ',$icerik);
      $icerik_bol = explode(' ', $icerik); // metini bosluklara gore bolduk
      $icerik = '';
      for($i = 0; $i < count($icerik_bol); $i++) {
           if ($icerik_bol[$i] != '') // veri yok mu? Atla, varsa ekle
           $icerik .= trim($icerik_bol[$i]).' ';
       }
       if( preg_match('/(.*?)\s/i', substr($icerik, $karaktersayisi), $dizi) )
        return $icerik = substr($icerik, 0, $karaktersayisi+strlen($dizi[0])).'...';
      } //kelimedenbol



  function categoriRow($data){
  	return DB::where('id', $data)->get('content_category')->row();
  }

  function editorName($data){
  	return DB::select('name')->where('id', $data)->get('user')->value();
  }

  function category($parentId = 0){
    return DB::where('parent_id', $parentId)->get('content_category')->result();
  }

  
function decode($deger){ echo htmlspecialchars_decode($deger);}

function settings($title = null){return DB::select('value')->where('key_name',$title)->get('settings')->value();}

function translate($data){echo ML::select($data);}


function seo($s) {
  $tr = array('ş','Ş','ı','I','İ','ğ','Ğ','ü','Ü','ö','Ö','Ç','ç','(',')','/',':',',');
  $eng = array('s','s','i','i','i','g','g','u','u','o','o','c','c','','','-','-','-');
  $s = str_replace($tr,$eng,$s);
  $s = strtolower($s);
  $s = preg_replace('/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/', '', $s);
  $s = preg_replace('/\s+/', '-', $s);
  $s = preg_replace('|-+|', '-', $s);
  $s = preg_replace('/#/', '', $s);
  $s = str_replace('.', '', $s);
  $s = trim($s, '-');
  return $s;
}

function dateConvert($date) {

  $space = explode(' ', $date);

  $tr = explode("-",$space['0']);

  $date1 = $tr['2']."-".$tr['1']."-".$tr['0'];

  return $date1;

}


function contentRow($id){
  return DB::where('id',$id)->get('content')->row();
}