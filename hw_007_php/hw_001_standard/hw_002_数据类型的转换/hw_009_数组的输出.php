<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/13/19
 * Time: 4:42 AM
 */

$a = [1, 2, 3];

//第一种方法
echo $a;//Array


//第二种方法
echo '<br>';
//关联的同时打印值的类型
var_dump($a);//array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }


//第三种方法 专门输出数组用的 以更好的形式输出内容
//一般与HTML标签<pre></pre>配合使用
echo '<br>';
//pre 以源码内容形式输出内容
echo '<pre>';
//键值对,用=>关联
print_r($a);//Array ( [0] => 1 [1] => 2 [2] => 3 )
echo '</pre>';

