<?php

// 变量
// PHP是进行服务器端数据交互的计算机语言

// 变量是存储数据的容器

// 变量的定义：存储在内存之中，带有名称的数据信息。其存储的数据信息，在程序的执行过程中是可以发生改变的

// 内存的特点：暂时存储数据信息，一旦程序结束或者断电，数据信息会丢失


// 变量的定义(声明)


// $cmdPorName 小驼峰
// $cmd_por_name 蛇形


$a = 100;
$a = 200;

// 变量是在内存之中，划分出一块区域，将该区域命名之后，存储数据

// 正因为变量的这种工作原理(顺序)，数据必须是以键值对的形式存在

// 重复对一个变量进行复制，之后的数据会覆盖内存当中，之前存储的数据信息
// 
// 
// 
//连续赋值：
 
// $a = 100;

// $a = $b = $c = 100 ;
// 
// 
// 连续赋值的最右侧，一定是一个具体的数据，或者是一个已经赋值的变量
// 
// 
// 

// 地址赋值或者引用赋值：将变量的内存地址赋值给另外一个变量，两个变量都可以对该内存地址中的数据进行操作

// 地址赋值之后，两个变量操作的是同一个内存地址，一个变量操作之后，对另一个变量也会产生影响

$a = 100;

$b = &$a; 

$a = 300;

$b = 400;


echo $a,"<br>",$b;




