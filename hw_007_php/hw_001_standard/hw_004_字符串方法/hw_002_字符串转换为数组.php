<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/14/19
 * Time: 2:36 AM
 */
//str_split — 将字符串转换为数组
//array str_split( string $string[, int $split_length = 1] )

//官方案例
$str = "Hello Friend";

$arr1 = str_split($str);
$arr2 = str_split($str, 3);

print_r($arr1);
echo '<br>';
print_r($arr2);