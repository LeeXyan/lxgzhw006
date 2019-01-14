<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/13/19
 * Time: 4:11 AM
 */

//使用3个具体类型的转换函数，intval()、floatval()、strval()
//【记忆：想转换的目的类型+val()】

$a = 3.33;
//转换为整数
echo intval($a);

echo '<br>';

$b = 3;
//转换为浮点数
var_dump(floatval($b));
echo '<br>';
//转换为字符串
var_dump(strval($b), strval($a));

//转换为布尔值,非0即就是真
echo '<br>';
var_dump(boolval($a), boolval($b));