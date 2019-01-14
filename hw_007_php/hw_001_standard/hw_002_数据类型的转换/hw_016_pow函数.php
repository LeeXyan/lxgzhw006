<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/13/19
 * Time: 5:39 AM
 */

//number pow( number $base, number $exp)
//返回 base 的 exp 次方的幂。如果可能，本函数会返回 integer。


//官方案例1
var_dump(pow(2, 8)); // int(256)
echo '<br>';
echo pow(-1, 20); // 1
echo '<br>';
echo pow(0, 0); // 1
echo '<br>';

echo pow(-1, 5.5); // PHP >4.0.6  NAN
echo '<br>';

echo pow(-1, 5.5); // PHP <=4.0.6 1.#IND
echo '<br>';

//返回值: 如果不能计算幂，将发出一条警告，pow() 将返回 FALSE。pow() 开始不产生任何的警告。

//字符串会自动转换
//结果为1 任何数的0次方都为1  不能提取整数的字符串转换为0
echo pow(2.5, 'a');//字符串从左起 能提取数字就提取整数部分 不能就转换为0
echo '<br>';
echo pow(2.5, '22a');
echo '<br>';
echo pow(2.5, '0.322a');
echo '<br>';
//字符串有浮点数,默认保留3位小数
echo 1 + '0.322a';
