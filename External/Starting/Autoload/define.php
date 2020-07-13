<?php 

$browser_lang = !empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) ? strtok(strip_tags($_SERVER['HTTP_ACCEPT_LANGUAGE']), ',') : '';

$lang = substr($browser_lang, 0, 2);


//ML::lang('tr');