
<?php
function handle($params){
$newsxml = simplexml_load_file('http://www.biranger.jp/feed','SimpleXMLElement',LIBXML_NOCDATA);
$newsvar = get_object_vars($newsxml);
$items   = $newsvar['channel']->item;
$i = 1;
$name = "美容" ;
	return array('items' => $items,'i' =>$i,'name'=>$name);
}