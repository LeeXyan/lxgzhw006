<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/14/19
 * Time: 3:33 AM
 */

$a = 33;
//前缀写法 先自增 后执行
echo ++$a . '<br>';
//后缀写法 先执行 后自增
echo $a++ . '<br>';//先执行了 但是没有自增
echo $a;

//效果,每执行一次,自增
