<?php

// 常量：
// 一经定义就无法改变的数据

// 系统常量：
// PHP系统定义的常量
// 每次执行都会是固定数据



// 魔术常量：每次执行，都会动态获取新的数据
// 
// 

// echo __LINE__;




// 当前所在行号
// echo __LINE__;
// echo "<br>";

// 当前文件的完整路径(包括文件名称)
// echo __FILE__;
// echo "<br>";
// 当前文件的所在文件夹
// echo __DIR__;


// 自定义常量：通过define()函数定义的常量
// 
// 自定义常量，大小写一定要敏感
// 
// 自定义常量的名称，一定要大写
// 
// 将定义的名称直接写在引号之中，调用时不要再添加引号
// 
// 
// 自定义常量，一经定义，不能以任何形式修改其存储的数据，只能在定义时修改
//

 
define("SUM" , 300);


echo SUM;

$a = SUM;

echo $a;

PHP_INT_MAX