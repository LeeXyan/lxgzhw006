<?php
header('content-type:text/html;charset=utf-8');
date_default_timezone_set('Asia/Shanghai');
$start = microtime(true);
$sum = 0;
for ($n = 1; $n <= 100000; $n++) {
	$sum += $n;
}
$end = microtime(true);
printf('程序执行时长为%0.5s秒', ($end - $start));
