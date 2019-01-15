<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/14/19
 * Time: 12:50 AM
 */
//sha1 — 计算字符串的 sha1 散列值

//string sha1( string $str[, bool $raw_output = false] )

//官方案例
$str = 'apple';
echo md5($str);
echo '<br>';
echo sha1($str);//长度比md5长
echo '<br>';
if (sha1($str) === 'd0be2dc421be4fcd0172e5afceea3970e2f3d940') {
    echo "Would you like a green or red apple?";
}

//md5和sha1都是一种算法,将一个字符串转换为一个固定的新的字符串

//区别:md5是30位的  sha1是40位的

//应用:将前端输入敏感信息,转化为哈希值,存储在数据库中