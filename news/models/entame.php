<?php
function handle($params){
$newsxml = simplexml_load_file('http://top.tsite.jp/rss','SimpleXMLElement',LIBXML_NOCDATA);
$newsvar = get_object_vars($newsxml);
$items   = $newsvar['channel']->item;
$i = 1;
$name = "エンタメ" ;
	return array('items' => $items,'i' =>$i,'name'=>$name);
}