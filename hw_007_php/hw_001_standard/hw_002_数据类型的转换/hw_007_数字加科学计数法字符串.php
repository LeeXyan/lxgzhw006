<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/13/19
 * Time: 4:29 AM
 */

$a = 100;
$b = '1.5e3aaaa';//隐式转换会提取符合数字形式的部分 强制转换不会

//隐式转换
echo $a + $b;//1600
echo '<br>';

//强制转换
echo $a + intval($b);//101