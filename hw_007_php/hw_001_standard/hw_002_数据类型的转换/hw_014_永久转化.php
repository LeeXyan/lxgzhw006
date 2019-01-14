<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/13/19
 * Time: 5:04 AM
 */

//会改变变量中存储的数据内容

$a = 333;
echo '<br>';
//转化 数据 类型  永久转化,改变了数据类型和值
echo settype($a, bool);
//bool settype( mixed &$var, string $type)
//&$var 指针符号不需要写在程序中  string $type 表示接收字符串

//有返回值 成功时返回 TRUE， 或者在失败时返回 FALSE。
/**
 * type 的可能值为：
 * ◦ "boolean" （或为"bool"，从 PHP 4.2.0 起）
 * ◦ "integer" （或为"int"，从 PHP 4.2.0 起）
 * ◦ "float" （只在 PHP 4.2.0 之后可以使用，对于旧版本中使用的"double"现已停用）
 * ◦ "string"
 * ◦ "array"
 * ◦ "object"
 * ◦ "null" （从 PHP 4.2.0 起）
 */
echo '<br>';
var_dump($a);
echo '<br>';
echo $a;

echo '<br>';

//手册案例
$foo = "5bar"; // string
$bar = true;   // boolean

settype($foo, "integer"); // $foo 现在是 5   (integer)
settype($bar, "string");  // $bar 现在是 "1" (string)