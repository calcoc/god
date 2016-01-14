<?php
function handle($params){
$newsxml = simplexml_load_file('http://iphone-mania.jp/feed/','SimpleXMLElement',LIBXML_NOCDATA);
$newsvar = get_object_vars($newsxml);
$items   = $newsvar['channel']->item;
$i = 1;
$name = "iPhone Mania" ;
	return array('items' => $items,'i' =>$i,'name'=>$name);
}