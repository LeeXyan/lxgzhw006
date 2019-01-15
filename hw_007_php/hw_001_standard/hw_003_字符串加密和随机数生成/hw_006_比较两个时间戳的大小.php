<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/14/19
 * Time: 12:48 AM
 */
date_default_timezone_set('Asia/Shanghai');

$a = strtotime('now');
$b = strtotime('2018-11-11 11:11:11');

echo date('Y-m-d H:m:s', $a) . '<br>';
echo date('Y-m-d H:m:s', $b) . '<br>';
echo date('Y-m-d H:m:s', $a - $b) . '<br>';

//$a = date('Y-m-d H:m:s', $a);
//$b = date('Y-m-d H:m:s', $b);

echo $a - $b . '<br>';