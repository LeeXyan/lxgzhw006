<?php
header('content-type:text/html;charset=utf-8');
//Frank的下标是多少?=>6--是已有的最大下标+1
$array = array(2 => 'Tom', 5 => 'Rose', 'Frank');
echo $array[6], '<hr>';
$array = array(5 => 'Tom', 2 => 'Rose', 'David');
echo $array[6], '<hr>';
//如果指定索引值为负数,则第一个没有下标的成员其默认下标为0
$array = array(-3 => 'Tom', 'Frank', 2 => 'Rose');
echo $array[0], '<hr>';
//产生同名覆盖
$array = array(-1 => 'Frank', 'Tom', 0 => 'Rose');
echo count($array), '<hr>';

$array = [
	'id' => 1,
	'username' => 'Rose',
	25,
];

print_r($array);
///////////////////////////////////////////
$users = ['张飞', '纪盈鑫', '好老师', '曹操'];

$teachers = ['name' => '纪盈鑫', 'age' => 21, 'salary' => 9999999];

//引申出
//explode,使用一个字符串去拆分另一个字符串(索引数组)
$array = explode('.', 'ddid.txt.jpg');
print_r($array);
echo '<hr>';
$filename = 'images/asdfkasdadfsasdasdf.jpg';
$array = pathinfo($filename);
print_r($array);
echo '<hr>';