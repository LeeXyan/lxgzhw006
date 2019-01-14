<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/12/19
 * Time: 5:53 AM
 */

//echo 想页面当中输出内容

$a = 100;
$b = 200;
$c = 300;

echo $a;

function show()
{
    echo '<br>';
}

show();
echo $a, $b, $c;

//var_dump 输出变量数据类型以及具体的值
show();
$a1 = 3 < 1;//一个变量的值比较的结果
var_dump($a1);
show();
$b1 = 3 > 1;
var_dump($b1);