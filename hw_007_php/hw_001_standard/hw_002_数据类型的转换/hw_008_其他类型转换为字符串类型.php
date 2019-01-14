<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/13/19
 * Time: 4:32 AM
 */

//多用于字符串拼接已经echo输出

$a = 10;
$b = '大鹏';

//用.号拼接
echo $a . $b;

//转换原则
echo '<br>';

echo null . $b;//null会转换为空字符串
echo '<br>';
echo true . $b;//转换为'1'
echo '<br>';
echo false . $b;//转换为空字符串 注意:不是0
echo '<br>';
echo 3.333 . $b;//浮点数 直接转换为纯数字 注意 带小数点

//数组转换为'Array' 对象转换为'Object'

echo '<br>';
echo [1, 2, 3] . $b;//Array大鹏

//echo只能输出标量类型 理论上只能输出字符串,如果是其他类型(标量类型)自动转换为字符串输出
//非标量类型转化会出问题
echo '<br>'; //bool int string float
echo 100;
echo '<br>';
echo true;//1
echo '<br>';
echo false;// 空 啥也不会输出
