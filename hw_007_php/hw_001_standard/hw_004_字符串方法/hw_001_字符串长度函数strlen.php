<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/14/19
 * Time: 2:31 AM
 */
//int strlen( string $string)

//官方案例
$str = 'abcdef';
echo strlen($str) . '<br>'; // 6

$str = ' ab cd ';
echo strlen($str) . '<br>'; // 7

//长度计算的不是个数,而是计算字节总和
echo strlen('中国很强大') . '<br>';