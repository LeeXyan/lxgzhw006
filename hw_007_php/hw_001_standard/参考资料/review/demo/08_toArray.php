<?php
header('content-type:text/html;charset=utf-8');
//count,用于统计数组中的成员数量
$n = 5;
echo count($n); //array(5)

//stdClass是PHP提供的自带的类
$obj = new stdClass;
$obj->id = 5;
$obj->username = 'Tom';
$obj->age = 22;
//声明类
class SimpleClass {
	public $id = 1;
	public $username = 'Tom';
	public $age = 22;
}

$array = array(new SimpleClass);
print_r($array);

echo count(null);