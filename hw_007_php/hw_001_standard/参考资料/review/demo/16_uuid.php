<?php
header('content-type:text/html;charset=utf-8');
function uuid() {

	$str = md5(uniqid(microtime(true) . mt_rand()));
	$uuid = substr($str, 0, 8) . '-' . substr($str, 8, 4) . '-' . substr($str, 12, 4) . '-' . substr($str, 16, 4) . '-' . substr($str, 20);
	return $uuid;
}

echo uuid();