<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/13/19
 * Time: 1:25 AM
 */

function show()
{
    echo '<br>';
}

//其他进制的整数存储方式 计算机常用存储方式:2/8/10/16进制

/**
 * bindec()：二进制转十进制
 * decbin()：十进制转二进制，一样用
 *
 * dechex() ：十进制转16进制
 * hexdec()：16进制转10进制（参数直接写值，不用写0x）
 *
 * octdec()：八进制转10进制
 * decoct()：10进制转8进制
 */
//10进制数
$num = 1000;
//转2进制 0b开头
echo bindec($num);
show();
//转8进制 0开头
echo decoct($num);
show();
//转16进制 0x开头
echo dechex($num);
show();

//其他进制转10进制
//2进制
$num = 0b1000;
echo bindec($num);
show();

//8进制
$num = 01000;
echo octdec($num);
show();
//16进制
$num = 0x1000;
echo hexdec($num);
show();