<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/13/19
 * Time: 4:24 AM
 */

echo '<br>';
var_dump(intval(null));//int(0)
echo '<br>';
var_dump(intval(true));//int(1)
echo '<br>';
var_dump(intval(false));;//int(0)

//字符串 只转换从左起为数字的部分
//有数字就提取数字 没有数字就为0
echo '<br>';
var_dump(intval('011aaa'));//int(11)
echo '<br>';
var_dump(intval('aa111'));//int(0)
echo '<br>';
var_dump(intval('3.33aa33'));//int(3)
echo '<br>';
var_dump(intval('0.0000222'));//int(0)

//复杂在包含e
echo '<br>';
var_dump(intval('1.22e100'));//int(1) 不会转换科学计算福






