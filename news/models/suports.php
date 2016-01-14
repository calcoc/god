<?php

function handle($params){
$newsxml = simplexml_load_file('http://news.livedoor.com/rss/article/vender/daily_sports','SimpleXMLElement',LIBXML_NOCDATA);
$newsvar = get_object_vars($newsxml);
$items   = $newsvar['channel']->item;
$i = 1;
$name = "スポーツ" ;
	return array('items' => $items,'i' =>$i,'name'=>$name);
}