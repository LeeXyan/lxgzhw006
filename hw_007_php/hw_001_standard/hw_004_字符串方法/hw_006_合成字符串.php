<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/14/19
 * Time: 2:54 AM
 */
$str = "a b c d e f g";
$result = explode(" ", $str);

$str_1 = implode("\t", $result);
echo $str_1 . "\n";
echo '<br>';
echo '<hr>';

//将一个数组按一定的规则合并成新的字符串
$str = [1, 2, 3, 4, 5];
$str_1 = implode("", $str);
echo $str_1 . "\n";
echo '<br>';
echo '<hr>';