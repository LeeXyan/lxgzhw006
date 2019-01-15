<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/14/19
 * Time: 2:39 AM
 */
//去除字符串中的空格和特殊字符
//实战案例
$str_1 = " Hello";
$str_2 = "world\n";
$str = $str_1 . " " . $str_2;
echo $str;
echo "<br>";
echo "<br>";
echo trim($str);
