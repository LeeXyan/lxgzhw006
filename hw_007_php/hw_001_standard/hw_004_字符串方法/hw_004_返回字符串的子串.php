<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/14/19
 * Time: 2:41 AM
 */
//string substr( string $string, int $start[, int $length] )

//返回字符串 string 由 start 和 length 参数指定的子字符串。

//本质上是切片

//官方案例
$rest = substr("abcdef", -1);    // 返回 "f"
$rest = substr("abcdef", -2);    // 返回 "ef"
$rest = substr("abcdef", -3, 1); // 返回 "d"

$rest = substr("abcdef", 0, -1);  // 返回 "abcde"
$rest = substr("abcdef", 2, -1);  // 返回 "cde"
$rest = substr("abcdef", 4, -4);  // 返回 ""
$rest = substr("abcdef", -3, -1); // 返回 "de"

echo '<br>';
echo substr('abcdef', 1);     // bcdef

echo '<br>';
echo substr('abcdef', 1, 3);  // bcd
echo '<br>';
echo substr('abcdef', 0, 4);  // abcd
echo '<br>';
echo substr('abcdef', 0, 8);  // abcdef
echo '<br>';
echo substr('abcdef', -1, 1); // f
echo '<br>';

// 访问字符串中的单个字符
// 也可以使用中括号
$string = 'abcdef';
echo $string[0];                 // a
echo '<br>';
echo $string[3];                 // d
echo '<br>';
echo $string[strlen($string) - 1]; // f
echo '<br>';


echo substr('lxgzhw', -1) . '<br>';//只取一个
//和python的切片不一样,第二个参数是长度,而不是结束索引
echo substr('lxgzhw', -1, 1) . '<br>';//只取一个
//只能正向截取,不会反向截取
echo substr('lxgzhw', -1, 3) . '<br>';//只取一个
//负数长度无效
echo substr('lxgzhw', -1, -3) . '<br>';//只取一个
//如果第一个数是负数,表示从最后截取多少个字符
echo substr("abcdef", -3, 2) . '<br>';//de 先把三个截取出来 再取前两个
echo substr("abcdef", 3) . '<br>';//def
echo substr("abcdef", 5) . '<br>';//f
//如果只有一个参数,代表的是从这个参数一直截取到字符串末尾
echo substr("abcdef", 1) . '<br>';//f
//如果第二个参数是负数,表示从截取字符串的最后减去指定的负数
echo substr("abcdef", 1, -2) . '<br>';//f
echo substr("abcdef", 3, -2) . '<br>';

//总结
/**
 * 第一个参数是原串
 * 第二个参数决定截取的位置
 * 第三个参数决定截取的长度
 */