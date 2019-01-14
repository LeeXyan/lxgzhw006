<?php
/**
 * Created by PhpStorm.
 * User: lxgzhw
 * Date: 1/13/19
 * Time: 5:51 AM
 */

//(PHP 4, PHP 5, PHP 7)
//max — 找出最大值

//mixed max( array $values)
//mixed max( mixed $value1, mixed $value2[, mixed $...] )
function show()
{
    echo '<br>--------------------------------------<br>';
}

//官方案例
show();
echo max(1, 3, 5, 6, 7);  // 7
show();
echo max(array(2, 4, 5)); // 5
show();

// When 'hello' is cast as integer it will be 0. Both the parameters are equally
// long, so the order they are given in determines the result
echo max(0, 'hello');     // 0
show();

echo max('hello', 0);     // hello
show();

echo max('42', 3); // '42'
show();

// Here 0 > -1, so 'hello' is the return value.
// 字符串转换成了0
echo max(-1, 'hello');    // hello
show();

// With multiple arrays of different lengths, max returns the longest
$val = max(array(2, 2, 2), array(1, 1, 1, 1)); // array(1, 1, 1, 1)
echo $val;
show();

// 对多个数组，max 从左向右比较。
// 因此在本例中：2 == 2，但 4 < 5
$val = max(array(2, 4, 8), array(2, 5, 7)); // array(2, 5, 7)
echo $val;

show();

// 如果同时给出数组和非数组作为参数，则总是将数组视为
// 最大值返回 比较的是字符串的编码
$val = max('string', array(2, 5, 7), 42);   // array(2, 5, 7)
echo $val;
