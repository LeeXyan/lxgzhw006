<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/13/19
 * Time: 3:52 AM
 */

//给变量赋值为null,变量的数据类型就是空值

$a = null;
var_dump($a);//NULL
//数据类型是空的数据类型

//定义未赋值
$b;
echo '<br>';
var_dump($b);

//已经销毁的变量也是空值
$c = '需要被销毁';
echo '<br>';
echo $c;
unset($c);//销毁
echo '<br>';
echo $c;//直接没有了 不是空值,从内存中彻底移除

/**
 * 总结:
 *  可能出现空值的情况:
 *      未定义的变量
 *      定义未赋值的变量
 *      被销毁的变量
 *      赋值为null的变量
 *
 */