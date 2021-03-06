<?php

// 原始数据类型

// 标量类型：一个变量中只能存储一个数据

// $a = 100;

// $a = 200;

// 因为：整数是一种标量数据类型，变量当中只能存储一个数据


// 复合类型：一个变量中可以存储多个数据

// $a = [1,2,3,4,5];

// 特殊类型：空值(NULL)  资源类型(resource)
// 
// 

// 布尔值类型：往往是一个判断或者比较的结果

// true 真    false 假
// 

// $a = 3 < 1;
// $b = 3 > 1;

// var_dump($a);
// var_dump($b);
// 

// 整数类型(integer/int)
// 
// 范围，64位
// 	  最大：PHP_INT_MAX 2^63-1
// 	  最小：PHP_INT_MIN	-(2^63)

// 计算机语言中，计算机的底层语言形式为01的数字组合，所谓的64位系统，指的是，计算机存储的数据最多可以由64位01数字组成，存储的数据，理论上最长64位，但是第一位需要存储整数的正负，那么实际存储范围是63位，又因为0作为一个特殊数据存储在正数范围内，所以

// 最大值是：2的63次方，减一
// 最小是是：-的  2的63次方


// 常量：在程序的执行过程中，存储数据不会发生改变的

// 正数存储数据溢出
// 
// 如果存储的数据超过最大值，或者小于最小值，页面会以科学计数法形式显示数据，数据类型会变为浮点数类型
// 
// 


// $a = PHP_INT_MAX;

// $b = $a + 100;

// echo $b;
// echo "<br>";
// var_dump($a);
// echo "<br>";
// var_dump($b);

// 其他进制，正数存储方式

// 计算机常用存储方式

// 1，二进制：在存储整数前加 0b (大小写都行)，PHP会将存储的二进制数字自动转化为十进制数字输出
// 
// 2，八进制：在存储整数前加 0
// 
// 3，十进制：正常写
// 
// 4，十六进制：在存储整数前加 0x
// 

// 二进制
$a = 0B1001;

// 八进制
// 
$a = 01001;

// 十六进制
// 
// $a = 0X1001;

// echo $a ; 



// 浮点数类型(float)
// 
// 存储范围：64位：最大值：1.8E308

// 浮点数的存储方式非常复杂，与整数的存储方式完全不同，不用去理解浮点数的存储方式，记住范围就可以了

// 科学计数法：讲一个数字，转化为10的乘方的形式

// 56789 ———>		5.6789e4

// 0.0001 ——>		1e-4
// 


// 浮点数的溢出，页面会输出INF(-INF)，数据类型仍然是float


// $a = -2e310;

// echo $a;
// var_dump($a);
// 

// 浮点数的有效数字
// 浮点不能将308位都显示全，执行的是有效数字设定。从左边第一个非数字起，最多显示14位数字(整数部分+小数部分)
// 

// 整数的显示，没有有效数字限制(可以超过14位)，就受存储范围限制
$a = 1234567890123456789;


// 浮点数的显示，最多一共14位
// 
// 1，整数部分没有超过14位，整数+小数一共是14位

// 2，整数部分超过14位有效数字，转化为科学计数法形式显示


// $a = 1.234567890123456789;

// echo $a ;
// 
// 
// 浮点数类型的误差
// 
// 由于PHP程序对于浮点数的特殊存储方式，造成浮点数在执行运算或者比较时，一定会存在误差，只是在特殊情况下这种误差会被表现出来
// 
// 
// 
// 总结：PHP中浮点数直接参与计算或者比较，误差会永远存在，只是一般情况下不会表现出来，只有在特定情况下才会出现
// 

// PHP中对于浮点数的运算，有专门的计算函数

// 应该是tur，误差结果为false
var_dump((0.1+0.7)*10 == 8);

// 获取数据的整数部分

// 应该是58，误差结果为57
echo intval(0.58*100);


// 应该是57，误差结果为56
echo intval(0.57*100);






