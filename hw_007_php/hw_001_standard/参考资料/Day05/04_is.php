<?php
// is系列函数

// 判断变量的数据类型函数
// 

// $a = false;

// var_dump(is_bool($a));
//
// 


// is_null,检测变量是否为 NULL ,只有当变量存储的数据为null的时候，才会返回true，其他时候返回false
// 三种报错情况，未定义，未赋值，以销毁，系统会报错，但是is_null，返回值会是true
// 
//is_null默认此变量是已经存在且赋值的变量 

// $a = 0; 

// var_dump(is_null($a));

// echo "<br>";

// var_dump(isset($a));



// isset，检查变量是否设置，就是看变量是否存在，如果存在再去判断变量当中存储的数据是否是null
// 
// is_null 和 isset 的区别：
// 1，如果遇到未定义，未赋值，已销毁的变量，is_null函数会报错，isset不会报错
// 
// 2，两个函数的返回值正好相反
// 

// 3,empty,判断是否为"空"：
// 此空非NULL
// 
// 此空为：•"" (空字符串)
// •0 (作为整数的0)
// •0.0 (作为浮点数的0)
// •"0" (作为字符串的0)
// •NULL
// •FALSE
// •array() (一个空数组)
// •$var; (一个声明了，但是没有值的变量)








// 检查是否是布尔值

// is_bool()  

// $a = true;

// 检查是否是整型
// 
// is_int() , is_integer() , is_long()

// is_integer() , is_long() 都是 is_int() 的别名函数

// 别名函数是使用方法，参数，返回值，全部相同的函数，只是函数名称不同
// 

// 浮点型

// is_float()  is_double() is_real()
// 

// 字符串
// 
// is_string()


// 检测变量是否为数字或数字字符串
// 
//  is_numeric() 

// $a = "10e3";
// var_dump(is_numeric($a));

// 返回true 1，数字，整型，浮点型
// 		 2，内容为纯数字的字符串，内容为纯整数，纯浮点数，符合科学计数法的纯内容


// 检查是否是标量类型
// 标量是四种：整型，浮点型，字符串型，布尔型
// is_scalar()
// 



// 数组
// is_array()
// 


// 对象

// is_object()
// 

// 资源

// is_resource()
// 

