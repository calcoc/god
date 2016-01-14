<?php

function handle($params){
$newsxml = simplexml_load_file('http://feeds.cinematoday.jp/cinematoday_update?format=xml','SimpleXMLElement',LIBXML_NOCDATA);
$newsvar = get_object_vars($newsxml);
$items   = $newsvar['channel']->item;
$i = 1;
$name = "映画情報" ;
	return array('items' => $items,'i' =>$i,'name'=>$name);
}