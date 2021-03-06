<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/13/19
 * Time: 1:29 AM
 */

//hw_013_字符串类型

//字符串:是由字母,数字,符号,汉字组成的一串内容,一般用引号包起来

//语法:字符串类型的数据,必须写在定界符之内 '' 或 ""

//四种定界符

//单引号  双引号 Heredoc   Nowdoc

$a = 100;
function show()
{
    echo '<hr>';
    echo '<hr>';
}

var_dump($a);

$b = '100';
show();
var_dump($b);//string(字符串长度)
show();
$c = "300";
var_dump($c);

//单引号和双引号都是直接包裹内容,作为字符串存储在变量中

//区别:
/***
 * 1.单引号,双引号之中,不能包裹其本身
 * 2.双引号会对其中的变量进行解析,输出的是变量当中的存储数据,
 *      单引号不会对其中的数据进行解析,会将变量当做字符串直接
 *      输出.
 */

//$a = '2'0'2';
//var_dump($a);