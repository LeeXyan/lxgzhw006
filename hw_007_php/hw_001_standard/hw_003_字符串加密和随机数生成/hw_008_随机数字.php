<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/14/19
 * Time: 1:01 AM
 */
//随机数字
//int mt_rand( int $min, int $max)

//返回 min （或者 0） 到 max （或者是到 mt_getrandmax() ，包含这个值）之间的随机整数。

//官方案例
echo mt_rand() . "<br>";
echo mt_rand() . "<br>";

echo mt_rand(5, 15) . '<br>';

//怎么生成两位的随机数

echo mt_rand(10, 99) . '<br>';
//随机生成2位小数
echo mt_rand(1, 99) / 100 . '<br>';

//参数只能是整数,其他类型会被自动转换为整数

//大部分系统函数的参数,如果输入为其他数据类型,不是该参数的正确形式,基本都会隐式转换

//这种方法可以简化操作

//简单方式1