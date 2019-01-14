<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/12/19
 * Time: 5:34 AM
 */

//地址赋值以后 两个变量完全一致,相互影响

//实例
$a = 100;
$b =& $a;

$a += 1000;

echo $a;
echo '<br>';
echo $b;

//存1000是否比存100占得地儿大
$c = 100;
$d = 1000;