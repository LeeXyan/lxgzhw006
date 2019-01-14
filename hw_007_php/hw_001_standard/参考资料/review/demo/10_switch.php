<?php
header('content-type:text/html;charset=utf-8');
$n = 5;
switch ($n) {
case 1:
	echo '中国';
	break;
case 2:
	echo '法国';
	break;
default:
	echo '美国';
case 3:
	echo '德国';
	break;
}