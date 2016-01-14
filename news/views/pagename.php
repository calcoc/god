<?php 

$str = $_SERVER["REQUEST_URI"];

$url = parse_url($str);

$url = serialize($url);

$b = explode("/",$url);

$a = explode(";",$b[2]);

$user_ids = substr($a[0], 0, -1);

$parse = $user_ids;